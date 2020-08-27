<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pemesanan;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $events = Pemesanan::where('event', 1)->orderBy('start', 'ASC')->get();
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

        $rules = [
            'judul'          => 'required|min:5',
            'deskripsi'       => 'required|min:10',
        ];

        $message = [
            'required'  => ':attribute tidak boleh kosong',
            'unique'    => ':attribute sudah di tambahkan',
            'max'       => ':attribute maksimal :max karakter',
            'min'       => ':attribute minimal :min karakter',
            'digits_between' => ':attribute setidaknya :min sampai :max karakter',
            'title.regex'     => ':attribute harus huruf semua'
        ];

        $this->validate($request, $rules, $message);

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
        return redirect(route('admin.acara'))->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view ('admin.acara.info', compact('event'));
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

        $rules = [
            'judul'          => 'required|regex:/^[\pL\s\-]+$/u||min:5',
            'deskripsi'       => 'required|min:10',
        ];

        $message = [
            'required'  => ':attribute tidak boleh kosong',
            'unique'    => ':attribute sudah di tambahkan',
            'max'       => ':attribute maksimal :max karakter',
            'min'       => ':attribute minimal :min karakter',
            'digits_between' => ':attribute setidaknya :min sampai :max karakter',
            'title.regex'     => ':attribute harus huruf semua'
        ];

        $this->validate($request, $rules, $message);

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
            $event->gambar = $path;
        }
        $event->update();
        return redirect()->route('admin.acara')->with('success', 'Data Berhasil Diubah');
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
        return redirect()->route('admin.acara')->with('danger', 'Data Berhasil Dihapus');
    }
}
