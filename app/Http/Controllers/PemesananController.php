<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{

    public function formPemesananPerJam(Facility $facility)
    {
        return view('pengguna.pemesanan_jam', compact('facility'));
    }

    public function checkStartToFinish(string $_date, string $_start, string $_finish)
    {
        $start = date('d-m-Y H:i:s', strtotime($_date . $_start));
        $finish = date('d-m-Y H:i:s', strtotime($_date . $_finish));
        return $start < $finish;
    }

    public function pesanPerJam(Request $request)
    {
        $BATASJAM = Facility::$BATASJAM;
        if (!$this->checkStartToFinish($request->tgl_kegiatan, $request->jam_mulai, $request->jam_selesai)) {
            return redirect()->back();
        }

        $fasilitas = Facility::where('id', $request->id_fasilitas)->first();
        $pemesanan = new Pemesanan();

        $pemesanan->start = date('d-m-Y H:i:s', strtotime($request->tgl_kegiatan . $request->jam_mulai));
        $pemesanan->finish = date('d-m-Y H:i:s', strtotime($request->tgl_kegiatan . $request->jam_selesai));
        $pemesanan->nama = $request->penanggung_jawab;
        $pemesanan->id_fasilitas = $request->id_fasilitas;

        $start = new \DateTime($pemesanan->start);
        $finish = new \DateTime($pemesanan->finish);
        $datediff = $start->diff($finish);
        $interval = (int) $datediff->format("%H");

        $jamMulai = (int) $start->format('H');
        $jamSelesai = (int) $finish->format('H');

        if ($jamMulai < $BATASJAM && $jamSelesai > $BATASJAM) {
            // kondisi jika menyewa di jam siang beserta jam malam
            $harga = (($BATASJAM - $jamMulai)*$fasilitas->olahraga_siang)+(($jamSelesai - $BATASJAM)*$fasilitas->olahraga_malam);
            $pemesanan->penggunaan_olahraga_siang = $BATASJAM - $jamMulai;
            $pemesanan->penggunaan_olahraga_malam = $jamSelesai - $BATASJAM;
        } elseif ($jamMulai < $BATASJAM && $jamSelesai <= $BATASJAM) {
            // kondisi jika menyewa di jam siang saja
            $harga = ($jamSelesai - $jamMulai) * $fasilitas->olahraga_siang;
            $pemesanan->penggunaan_olahraga_siang = $jamSelesai -  $jamMulai;
        } else {
            // kondisi jika menyewa di jam malam saja
            $harga = ($jamSelesai - $jamMulai) * $fasilitas->olahraga_malam;
            $pemesanan->penggunaan_olahraga_malam = $jamSelesai -  $jamMulai;
        }
        return $pemesanan;
    }

    public function formPemesananPerHari()
    {
        return view('pengguna.pemesanan_hari');
    }
}
