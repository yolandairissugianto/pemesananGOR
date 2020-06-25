<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananJamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $substr_jam_mulai = substr($request->jam_mulai, 0, 2);
        $substr_jam_selesai = substr($request->jam_selesai, 0, 2);


        if($substr_jam_mulai < "06" || $substr_jam_mulai > "17" ){
            return redirect()->back()->with('error', 'jam mulai 06:00 sampai 17:00');
        }

        if($substr_jam_selesai < "06" || $substr_jam_selesai > "17" ){
            return redirect()->back()->with('error', 'jam selesai 06:00 sampai 17:00');
        }

        if($substr_jam_selesai <= $substr_jam_mulai){
            return redirect()->back()->with('error', 'jam selesai harus lebih dari jam mulai');
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
