<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.acara.acara', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.acara.tambah-acara');
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
        $destinationPath = public_path('uploads/admin/acara');
        $gambar->move($destinationPath, $path);

        $event = new Event([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tgl_acara' => $request->input('tanggal'),
            'jam_acara' => $request->input('jam'),
            'gambar' => $path
        ]);
        $event->save();
        return redirect(route('admin.acara'));
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
        $event = Event::find($id);
        return view ('admin.acara.edit-acara', compact('event'));
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
        $event = Event::find($id);
        $event->judul = $request->input('judul');
        $event->deskripsi = $request->input('deskripsi');
        $event->tgl_acara = $request->input('tanggal');
        $event->jam_acara = $request->input('jam');
        $gambar = $request->file('gambar');
        if ($gambar != null){
            $path = time() . '.' . $gambar->getClientOriginalExtension();
            $destinationPath = public_path('uploads/admin/acara');
            $gambar->move($destinationPath, $path); 
            $fevent->gambar = $path;
        }
        $event->update();
        return redirect()->route('admin.acara');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('admin.acara');
    }
}
