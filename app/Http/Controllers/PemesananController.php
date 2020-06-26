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
        if (!$this->checkStartToFinish($request->tgl_kegiatan, $request->jam_mulai, $request->jam_selesai)) {
            return redirect()->back();
        }
        $pemesanan = new Pemesanan();
        $pemesanan->start = date('d-m-Y H:i:s', strtotime($request->tgl_kegiatan . $request->jam_mulai));
        $pemesanan->finish = date('d-m-Y H:i:s', strtotime($request->tgl_kegiatan . $request->jam_selesai));

        $datetime1 = new \DateTime($pemesanan->start);
        $datetime2 = new \DateTime($pemesanan->finish);
        $datediff = $datetime1->diff($datetime2);
        return $interval = (int) $datediff->format("%H");
        $pemesanan->nama = $request->penanggung_jawab;
        $pemesanan->id_fasilitas = $request->id_fasilitas;

        return $pemesanan;
    }

    public function formPemesananPerHari()
    {
        return view('pengguna.pemesanan_hari');
    }
}
