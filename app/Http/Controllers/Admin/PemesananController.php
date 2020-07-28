<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PemesananExport;
use App\Http\Controllers\Controller;
use App\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Telegram\Bot\FileUpload\InputFile;
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

    public function export()
    {
        return Excel::download(new PemesananExport, date('ymdHis') . '-pemesanan.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function downloadSuratPengajuan(Pemesanan $pemesanan)
    {
        $file = public_path('uploads/surat-pengajuan/' . $pemesanan->surat_pengajuan);
        return response()->download($file);
    }

    public function kirimSuratIjinPenggunaan(Request $request, Pemesanan $pemesanan)
    {
        $messages = collect(Telegram::getUpdates());
        $message = $messages->where('message.text', $pemesanan->code)->first();
        if (!$message) {
            return redirect()->back()
                ->with(['error' => 'Gagal mengirim surat ijin penggunaan karena kode peminjaman tidak ditemukan pada BOT']);
        }

        $surat = $request->file('surat_ijin');
        $path = time() . '.' . $surat->getClientOriginalExtension();
        $destinationPath = public_path('uploads/surat-ijin-penggunaan/');
        $surat->move($destinationPath, $path);

        $pemesanan->already_paid = true;
        $pemesanan->update();

        $chat_id = $message->message->chat->id;

        Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => "Terima Kasih " . strtoupper($pemesanan->nama) . ", "
                . "pembayaran anda untuk " . $pemesanan->fasilitas->nama_fasilitas . " pada GOR Trisanja telah diterima."
        ]);

        Telegram::sendDocument([
            'chat_id' => $chat_id,
            'document' => new InputFile(public_path('uploads/surat-ijin-penggunaan/' . $path)),
            'caption' => 'Surat Ijin Penggunaan'
        ]);

        return redirect()->back()
            ->with(['success' => "Telah menerima pembayaran peminjaman " . $pemesanan->fasilitas->nama_fasilitas . " dari $pemesanan->nama dan telah berhasil mengirim surat ijin penggunaan"]);

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
                ." Kemudian Kirimkan bukti transfer tersebut ke akun Telegram Admin GOR Trisanja di https://t.me/YolandaIris"
        ]);

        return redirect()->back()->with(['success' => "Telah menerima pengajuan peminjaman " . $pemesanan->fasilitas->nama_fasilitas . " dari $pemesanan->nama"]);
    }

//    public function terima_pembayaran(Pemesanan $pemesanan)
//    {
////        dd(public_path('uploads\dummy\dummy.pdf'));
//        $pemesanan->already_paid = true;
//        $pemesanan->update();
//
//        $messages = collect(Telegram::getUpdates());
//        $message = $messages->where('message.text', $pemesanan->code)->first();
//        $chat_id = $message->message->chat->id;
//
//        Telegram::sendMessage([
//            'chat_id' => $chat_id,
//            'text' => "Terima Kasih " . strtoupper($pemesanan->nama) . ", "
//                . "pembayaran anda untuk " . $pemesanan->fasilitas->nama_fasilitas . " pada GOR Trisanja telah diterima."
//        ]);
//
//        Telegram::sendDocument([
//            'chat_id' => $chat_id,
//            'document' => new InputFile(public_path('uploads\dummy\dummy.pdf')),
////            'caption' => 'Surat Ijin Penggunaan'
//        ]);
//
//        return redirect()->back()->with(['success' => "Telah menerima pembayaran peminjaman $pemesanan->fasilitas->nama_fasilitas dari $pemesanan->nama"]);
//    }
}
