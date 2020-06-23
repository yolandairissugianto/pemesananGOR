<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facility;

class FasilitasController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        return view('pengguna.fasilitas', compact('facilities'));
    }

    public function show($id)
    {
        $facility = Facility::find($id);
        return view ('pengguna.detail_fasilitas', compact('facility'));
    }
}
