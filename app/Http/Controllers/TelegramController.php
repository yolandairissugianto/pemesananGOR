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
        return $response;
    }
}
