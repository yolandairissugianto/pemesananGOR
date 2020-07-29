<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArtikelController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.artikel.artikel', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.artikel.tambah-artikel');
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
            'title'          => 'required|min:5',
            'content'       => 'required|min:10',
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
        $path = time() . '.' . $gambar->getClientOriginalExtension();
        $destinationPath = public_path('uploads/admin/article');
        $gambar->move($destinationPath, $path);
        
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->gambar = $path;
        $article->save();
        return redirect(route('admin.artikel'))->with('success', 'Data Berhasil DItambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.artikel.info-artikel', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.artikel.edit-artikel', compact('article'));
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
            'title'          => 'required|regex:/^[\pL\s\-]+$/u||min:5',
            'content'       => 'required|min:10',
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
        
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $gambar = $request->file('gambar');
        if ($gambar != null){
            $path = time() . '.' . $gambar->getClientOriginalExtension();
            $destinationPath = public_path('uploads/admin/article');
            $gambar->move($destinationPath, $path); 
            $article->gambar = $path;
        }
        $article->update();
        return redirect()->route('admin.artikel')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('admin.artikel');
    }
}
