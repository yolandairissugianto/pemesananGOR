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
}
