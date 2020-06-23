@extends('pengguna.templates.default')

<title>Fasilitas</title>

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Fasilitas</h1>
        <span>Aritkel berkaitan dengan GOR Trisanja</span>
    </div>
</section>

@foreach ($facilities as $facility)
<div class="container clearfix">
    <div class="col_three_fifth topmargin-sm bottommargin">
        <img src="{{ asset('uploads/admin/fasilitas/'. $facility -> gambar) }}" width="auto" height="auto" alt="">
    </div>
    <div class="col_two_fifth topmargin-sm bottommargin-lg col_last">
        <div class="heading-block topmargin">
            <h2>{{ $facility-> nama_fasilitas }}</h2>
        </div>
        <p>{{ $facility-> deskripsi }}</p>
        <a href="{{ route('pengguna.detail_fasilitas', $facility -> id) }}"
            class="button button-border button-rounded button-large noleftmargin topmargin-sm">Lebih Lanjut</a>
    </div>
    <div class="line"></div>
</div>
@endforeach

@endsection