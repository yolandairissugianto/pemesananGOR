@extends('pengguna.templates.default')

<title>Artikel</title>

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Artikel</h1>
        <span>Aritkel berkaitan dengan GOR Trisanja</span>
    </div>
</section>

<div class="content-wrap">
    <div class="container clearfix">

        <div id="posts" class="post-grid grid-container grid-2 clearfix" data-layout="fitRows">
            @foreach ($articles as $article)
            <div class="entry clearfix">
                <div class="entry-image">
                    <img src="{{ asset('uploads/admin/article/'. $article -> gambar) }}" width="auto" height="auto" alt="">
                </div>
                <div class="entry-title">
                    <h2><a href="{{ route('pengguna.detail_artikel', $article->id) }}">{{ $article -> title }}</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i>{{ $article -> created_at }}</li>
                </ul>
                <div class="entry-content">
                    <p>{{ $article -> content }}</p>
                    <a href="{{ route('pengguna.detail_artikel', $article->id) }}" class="more-link">Lanjut Membaca</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
                <a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
            </div>
        </div>

    </div>
</div>
@endsection