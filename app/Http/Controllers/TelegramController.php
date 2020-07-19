<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function getMe()
    {
        $response = Telegram::getMe();
        return response()->json([
            $response
        ]);
    }

    public function getUpdates()
    {
        $response = Telegram::getUpdates();
        $data = collect($response);
        // $message = $data->where('message.text', '=', 'yolanda-2-gdkagsj')->first();
        // $chat_id = $message->message->chat->id;
        return $response;
        // return Telegram::sendMessage([
        //     'chat_id' => $chat_id,
        //     'text' => 'Pesanan sudah masuk, mohon tunggu konfirmasi dari admin GOR terimakasih hehe.
        //     silahkan kirim bukti transfer ke https://t.me/Damarp dengan nominal sekian rupiah ke rekening BANK BRI dengan nomor 79728947778639 ATAS NAMA Damar Permadany'
        // ]);
    }
}
