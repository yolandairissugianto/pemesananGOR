<?php

namespace App\Http\Controllers;
use App\Facility;
use App\Pemesanan;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function chart(){

        // $pemesanan = Pemesanan::select('id_fasilitas',DB::raw('count(*) as total'),DB::raw('YEAR(start) year, MONTH(start) month'))->with(['fasilitas' => function($query){
        //     $query->select('id','nama_fasilitas');
        // }])
        // ->groupby('id_fasilitas','month','year')
        // ->get();

        $pemesanan = Facility::select('id','nama_fasilitas')->with(['pemesanan' => function($query){
            $query->select('id_fasilitas',DB::raw('count(*) as total'),DB::raw('YEAR(start) as year, MONTH(start) as month') )->groupBy('id_fasilitas', 'month', 'year');
        }])->get();

        return $pemesanan;
    }
} 
