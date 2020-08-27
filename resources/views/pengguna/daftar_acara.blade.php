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

                    <img src="{{ asset('uploads/admin/fasilitas/'. $event->fasilitas->gambar) }}"
                    style="height: 170px; width: 300px" alt="">
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2>{{ $event->kegiatan }}</h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-time"></i>{{ \Carbon\Carbon::parse($event->start)->translatedFormat('H:i') . "-" . \Carbon\Carbon::parse($event->finish)->translatedFormat('H:i') }}</li>
                        <li><i class="icon-map-marker2"></i>{{ \Carbon\Carbon::parse($event->start)->translatedFormat('l, d F Y') }}</li>
                    </ul>
                    <div class="entry-content">
{{--                        <p>{{ substr_replace($event->deskripsi, "...", 120) }}</p>--}}
                        <p>{{ $event->deskripsi }}</p>
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
