<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use App\Pemesanan;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Pemesanan::where('event', 1)->orderBy('start', 'ASC')->get();
        return view('pengguna.daftar_acara', compact('events'));
    }
}
