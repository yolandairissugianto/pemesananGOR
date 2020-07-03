<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pemesanan;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class PemesananController extends Controller
{
    public function index()
    {
        $messages = collect(Telegram::getUpdates());
        $pemesanans = Pemesanan::all();

        foreach ($pemesanans as $pemesanan) {
            $exist = $messages->where('message.text', $pemesanan->code)->first();
            if ($exist) {
                $pemesanan->have_sent_code = true;
                $pemesanan->update();
            }
        }
        return view('admin.pemesanan.pemesanan', compact(['pemesanans']));
    }

    public function show(Pemesanan $pemesanan)
    {
        $messages = collect(Telegram::getUpdates());
        $exist = $messages->where('message.text', $pemesanan->code)->first();
        if ($exist) {
            $pemesanan->have_sent_code = true;
            $pemesanan->update();
        }
        return view('admin.pemesanan.detail-pemesanan', compact(['pemesanan']));
    }

    public function terima_pengajuan(Pemesanan $pemesanan)
    {
        $pemesanan->terima_pengajuan = true;
        $pemesanan->update();

        $messages = collect(Telegram::getUpdates());
        $message = $messages->where('message.text', $pemesanan->code)->first();
        $chat_id = $message->message->chat->id;

        Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => "Terima Kasih ". strtoupper($pemesanan->nama) .", "
                ."pengajuan peminjaman anda untuk ".$pemesanan->fasilitas->nama_fasilitas." pada GOR Trisanja telah diterima."
                ."\nJumlah total biaya peminjaman adalah Rp. " . number_format($pemesanan->price) ."."
                ."\nPembayaran bisa dilakukan cash di Ruang Admin GOR Trisanja."
                ."\nAtau bisa juga ditransfer ke akun Bank BRI atas nama GOR TRISANJA dengan Nomor Rekening 4498-2379-23723."
                ." Kemudian Kirimkan bukti transfer tersebut ke akun Telegram Admin GOR Trisanja di https://t.me/DamarP"
        ]);

        return redirect()->back()->with(['success' => "Telah menerima pengajuan peminjaman $pemesanan->fasilitas->nama_fasilitas dari $pemesanan->nama"]);
    }
}
