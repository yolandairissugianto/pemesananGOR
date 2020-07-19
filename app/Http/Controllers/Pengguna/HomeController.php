<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at','ASC')->LIMIT(2)->get();
        return view('pengguna.home', compact('articles'));
    } 
}

