<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pengguna.artikel', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);

        $recents = Article::orderBy('created_at','ASC')->LIMIT(2)->get();
        return view ('pengguna.detail_artikel', compact('article', 'recents'));
    }
}
