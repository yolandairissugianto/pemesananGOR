<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facility;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::all();
        return view('admin.fasilitas.fasilitas', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.fasilitas.tambah-fasilitas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $path = time() . '.' .$gambar->getClientOriginalExtension();
        $destinationPath = public_path('uploads/admin/fasilitas');
        $gambar->move($destinationPath, $path);

        $facility = new Facility([
            'nama_fasilitas' => $request->input('nama_fasilitas'),
            'deskripsi' => $request->input('deskripsi'),
            'olahraga_siang' => $request->input('olahraga_siang'),
            'olahraga_malam' => $request->input('olahraga_malam'),
            'dengan_karcis_sponsor' => $request->input('dengan_karcis_sponsor'),
            'dengan_sponsor' => $request->input('dengan_sponsor'),
            'tanpa_karcis_sponsor' => $request->input('tanpa_karcis_sponsor'),
            'gambar' => $path
        ]);
        $facility->save();
        return redirect(route('admin.fasilitas'));
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
        $facility = Facility::find($id);
        return view ('admin.fasilitas.edit-fasilitas', compact('facility'));
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
        
        $facility = Facility::find($id);
        $facility->nama_fasilitas = $request->input('nama_fasilitas');
        $facility->deskripsi = $request->input('deskripsi');
        $facility->olahraga_siang = $request->input('olahraga_siang');
        $facility->olahraga_malam = $request->input('olahraga_malam');
        $facility->dengan_karcis_sponsor = $request->input('dengan_karcis_sponsor');
        $facility->dengan_sponsor = $request->input('dengan_sponsor');
        $facility->tanpa_karcis_sponsor = $request->input('tanpa_karcis_sponsor');
        $gambar = $request->file('gambar');
        if ($gambar != null){
            $path = time() . '.' . $gambar->getClientOriginalExtension();
            $destinationPath = public_path('uploads/admin/fasilitas');
            $gambar->move($destinationPath, $path); 
            $facility->gambar = $path;
        }
        $facility->update();
        return redirect()->route('admin.fasilitas'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facility = Facility::find($id);
        $facility->delete();
        return redirect()->route('admin.fasilitas');
    }
}
