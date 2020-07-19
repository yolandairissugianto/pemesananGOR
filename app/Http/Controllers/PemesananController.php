<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PemesananController extends Controller
{

    public function formPemesananPerJam(Facility $facility)
    {
        $pemesanans = Pemesanan::where('id_fasilitas', $facility->id)->get();
        return view('pengguna.pemesanan_jam', compact(['facility', 'pemesanans']));
    }

    public function formPemesananPerHari(Facility $facility, $tipe)
    {
        $pemesanans = Pemesanan::where('id_fasilitas', $facility->id)->get();
        return view('pengguna.pemesanan_hari', compact(['facility', 'tipe', 'pemesanans']));
    }

    public function checkJamStartToFinish(string $_date, string $_start, string $_finish)
    {
        //mengubah string menjadi date dan time sesuai pada database
        $start = date('Y-m-d H:i:s', strtotime($_date . $_start));
        $finish = date('Y-m-d H:i:s', strtotime($_date . $_finish));
        return $start < $finish;
    }

    public function checkHariStartToFinish(string $start, string $finish)
    {
        //mengubah string menjadi date sesuai pada database
        $_start = date('Y-m-d', strtotime($start));
        $_finish = date('Y-m-d', strtotime($finish));
        return $_finish >= $_start;
    }

    public function checkExistingPemesanan($id_fasilitas, $_start, $_finish)
    {
        //mengubah string menjadi date dan time sesuai pada database
        $start = date('Y-m-d H:i:s', strtotime($_start));
        $finish = date('Y-m-d H:i:s', strtotime($_finish));
        //mengambil semua data yg ada di database untuk dicek apakah ada yang sama / bersinggungan
        //kemudian dicek satu persatu, jika tidak ada yg bersinggungan disimpan pada variable $exist
        $exist = Pemesanan::where('id_fasilitas', $id_fasilitas)
            ->where(function ($query) use ($start, $finish) {
                $query->whereBetween('start',
                    [date('Y-m-d H:i:s', strtotime($start)), date('Y-m-d H:i:s', strtotime($finish))])
                    ->orWhereBetween('finish',
                        [date('Y-m-d H:i:s', strtotime($start)), date('Y-m-d H:i:s', strtotime($finish))]);
            })->get();
        return $exist->count();
    }

    public function serializedDate(string $date, string $time)
    {
        return Carbon::parse($date . $time);
    }

    public function pesanPerJam(Request $request)
    {
        // batas jam adalah batas waktu antara jam siang dan malam, nilainya 17
        //memanggil fungsi $BATASJAM yg ada pad model Facility
        $BATASJAM = Facility::$BATASJAM;

        $fasilitas = Facility::where('id', $request->id_fasilitas)->first();
        $pemesanan = new Pemesanan();
        $pemesanan->id_fasilitas = $request->id_fasilitas;
        $pemesanan->nik = $request->nik;
        $pemesanan->event_organizer = $request->eo;
        $pemesanan->kegiatan = $request->kegiatan;
        $pemesanan->deskripsi = $request->deskripsi;
        $pemesanan->nama = $request->penanggung_jawab;
        $pemesanan->email = $request->email;
        $pemesanan->no_hp = $request->no_telp;

        $surat = $request->file('surat');
        $path = time() . '.' .$surat->getClientOriginalExtension();
        $destinationPath = public_path('uploads/surat-pengajuan/');
        $pemesanan->surat_pengajuan = $surat->move($destinationPath, $path);

        $pemesanan->start = $this->serializedDate($request->tgl_kegiatan, $request->jam_mulai);
        // dikurangi 1 detik
        $pemesanan->finish = $this->serializedDate($request->tgl_kegiatan, $request->jam_selesai)->subSecond();

        if ($this->checkExistingPemesanan($request->id_fasilitas, $pemesanan->start, $pemesanan->finish)) {
            return redirect()->back()->with(['error' => 'Mohon maaf, waktu yang anda masukan sudah dipesan. Silahkan pilih waktu lain']);
        }

        if (!$this->checkJamStartToFinish($request->tgl_kegiatan, $request->jam_mulai, $request->jam_selesai)) {
            return redirect()->back()->with(['error' => 'Jam selesai minimal satu jam setelah jam mulai']);
        }


        $start = new \DateTime(date('Y-m-d H:i:s', strtotime($request->tgl_kegiatan . $request->jam_mulai)));
        $finish = new \DateTime(date('Y-m-d H:i:s', strtotime($request->tgl_kegiatan . $request->jam_selesai)));

        $jamMulai = (int)$start->format('H');
        $jamSelesai = (int)$finish->format('H');

        if ($jamMulai < $BATASJAM && $jamSelesai > $BATASJAM) {
            // kondisi jika menyewa di jam siang beserta jam malam
            $harga = (($BATASJAM - $jamMulai) * $fasilitas->olahraga_siang) + (($jamSelesai - $BATASJAM) * $fasilitas->olahraga_malam);
            $pemesanan->penggunaan_olahraga_siang = $BATASJAM - $jamMulai;
            $pemesanan->penggunaan_olahraga_malam = $jamSelesai - $BATASJAM;
        } elseif ($jamMulai < $BATASJAM && $jamSelesai <= $BATASJAM) {
            // kondisi jika menyewa di jam siang saja
            $harga = ($jamSelesai - $jamMulai) * $fasilitas->olahraga_siang;
            $pemesanan->penggunaan_olahraga_siang = $jamSelesai - $jamMulai;
        } else {
            // kondisi jika menyewa di jam malam saja
            $harga = ($jamSelesai - $jamMulai) * $fasilitas->olahraga_malam;
            $pemesanan->penggunaan_olahraga_malam = $jamSelesai - $jamMulai;
        }

        $split = explode(" ", $pemesanan->nama);
        $firstname = array_shift($split);
        $pemesanan->code = strtolower($firstname) . "-" . $pemesanan->id_fasilitas . "-" . Str::random(6);
        
        $pemesanan->price = $harga;
        $pemesanan->save();
        return redirect()->back()->with([
            'success' => "Berhasil menginputkan data pengajuan peminjaman.",
            'pemesanan' => $pemesanan,
        ]);
    }

    public function pesanPerhari(Request $request, Facility $facility, $tipe)
    {
        $fasilitas = Facility::where('id', $request->id_fasilitas)->first();
        $pemesanan = new Pemesanan();
        $pemesanan->id_fasilitas = $fasilitas->id;
        $pemesanan->nik = $request->nik;
        $pemesanan->event_organizer = $request->eo;
        $pemesanan->kegiatan = $request->kegiatan;
        $pemesanan->deskripsi = $request->deskripsi;
        $pemesanan->nama = $request->penanggung_jawab;
        $pemesanan->email = $request->email;
        $pemesanan->no_hp = $request->no_telp;

        $surat = $request->file('surat');
        $path = time() . '.' .$surat->getClientOriginalExtension();
        $destinationPath = public_path('uploads/surat-pengajuan/');
        $pemesanan->surat_pengajuan = $surat->move($destinationPath, $path);


        $start = Carbon::parse($request->start . "06:00");
        $finish = Carbon::parse($request->finish . "20:59:59");

        if (!$this->checkHariStartToFinish((string)$request->start, (string)$request->finish)) {
            return redirect()->back()->with(['error' => 'Tanggal selesai kegiatan tidak boleh kurang dari tanggal mulai kegiatan']);
        }

        if ($this->checkExistingPemesanan($fasilitas->id, $start, $finish)) {
            return redirect()->back()->with(['error' => 'Mohon maaf, waktu yang anda masukan sudah dipesan. Silahkan pilih tanggal lain']);
        }

        $jumlah_jam = $start->diffInHours($finish->addSeconds())+9;
        $jumlah_hari = $jumlah_jam/24;

        if ($tipe == Pemesanan::$PEMINJAMAN_MENARIK_KARCIS_DAN_SPONSOR) {
            $harga = $jumlah_hari * $fasilitas->dengan_karcis_sponsor;
            $pemesanan->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor = $jumlah_hari;
        } elseif ($tipe == Pemesanan::$PEMINJAMAN_HANYA_DENGAN_SPONSOR) {
            $harga = $jumlah_hari * $fasilitas->dengan_sponsor;
            $pemesanan->penggunaan_selain_olahraga_tanpa_karcis_sponsor = $jumlah_hari;
        } else {
            $harga = $jumlah_hari * $fasilitas->tanpa_karcis_sponsor;
            $pemesanan->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor = $jumlah_hari;
        }

        $pemesanan->start = $start;
        $pemesanan->finish = $finish;
        $split = explode(" ", $pemesanan->nama);
        $firstname = array_shift($split);
        $pemesanan->code = strtolower($firstname) . "-" . $pemesanan->id_fasilitas . "-" . Str::random(6);
        $pemesanan->price = $harga;
        $pemesanan->save();
        return redirect()->back()->with(['success' => 'berhasil menginputkan data peminjaman', 'code' => $pemesanan->code]);

    }

}
