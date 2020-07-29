@extends('pengguna.templates.default')

<title>Daftar Acara</title>

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Daftar Acara</h1>
        <span>Aritkel berkaitan dengan GOR Trisanja</span>
    </div>
</section>  

<div class="content-wrap">
    <div class="container clearfix">
        <div id="posts" class="events small-thumbs">
            @foreach ($events as $event)
            <div class="entry clearfix">
                <div class="entry-image">
                    
                    <img src="{{ asset('uploads/admin/acara/'. $event -> gambar) }}" 
                    style="height: 170px; width: 300px" alt="">
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2>{{ $event -> judul }}</h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-time"></i>{{ $event -> jam_acara }}</li>
                        <li><i class="icon-map-marker2"></i>{{ $event -> tgl_acara }}</li>
                    </ul>
                    <div class="entry-content">
                        <p>{{ substr_replace($event -> deskripsi, "...", 120) }}</p>
                    </div>
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