@extends('pengguna.templates.default')

<title>Fasilitas</title>

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Fasilitas</h1>
        <span>Aritkel berkaitan dengan GOR Trisanja</span>
    </div>
</section>

<div class="container clearfix">
    <div class="col_three_fifth topmargin-sm bottommargin">
        <img data-animate="fadeInLeftBig" src="{{ asset('images/services/indoor.jpg') }}" alt="Imac">
    </div>
    <div class="col_two_fifth topmargin-sm bottommargin-lg col_last">
        <div class="heading-block topmargin">
            <h2>Lapangan Indoor</h2>
            <span>Fabulously Sharp &amp; Intuitive on your HD Devices.</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos
            provident quidem. Quaerat expedita dignissimos perferendis, nihil quo distinctio eius architecto
            reprehenderit maiores.</p>
        <a href="{{ route('pengguna.detail_fasilitas') }}"
            class="button button-border button-rounded button-large noleftmargin topmargin-sm">Lebih Lanjut</a>
    </div>
    <div class="line"></div>
</div>

<div class="container clearfix">
    <div class="col_three_fifth topmargin-sm bottommargin">
        <img data-animate="fadeInLeftBig" src="{{ asset('images/services/outdoor.jpg') }}" alt="Imac">
    </div>
    <div class="col_two_fifth topmargin-sm bottommargin-lg col_last">
        <div class="heading-block topmargin">
            <h2>Lapangan Outdoor</h2>
            <span>Fabulously Sharp &amp; Intuitive on your HD Devices.</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos
            provident quidem. Quaerat expedita dignissimos perferendis, nihil quo distinctio eius architecto
            reprehenderit maiores.</p>
        <a href="#"
            class="button button-border button-rounded button-large noleftmargin topmargin-sm">Lebih Lanjut</a>
    </div>
    <div class="line"></div>
</div>

<div class="container clearfix">
    <div class="col_three_fifth topmargin-sm bottommargin">
        <img data-animate="fadeInLeftBig" src="{{ asset('images/services/kolam renang.jpg') }}" alt="Imac">
    </div>
    <div class="col_two_fifth topmargin-sm bottommargin-lg col_last">
        <div class="heading-block topmargin">
            <h2>Kolam Renang Bangun Tirta</h2>
            <span>Fabulously Sharp &amp; Intuitive on your HD Devices.</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos
            provident quidem. Quaerat expedita dignissimos perferendis, nihil quo distinctio eius architecto
            reprehenderit maiores.</p>
        <a href="#"
            class="button button-border button-rounded button-large noleftmargin topmargin-sm">Lebih Lanjut</a>
    </div>
    <div class="line"></div>
</div>

<div class="container clearfix">
    <div class="col_three_fifth topmargin-sm bottommargin">
        <img data-animate="fadeInLeftBig" src="{{ asset('images/services/halaman.jpg') }}" alt="Imac">
    </div>
    <div class="col_two_fifth topmargin-sm bottommargin-lg col_last">
        <div class="heading-block topmargin">
            <h2>Halaman Depan</h2>
            <span>Fabulously Sharp &amp; Intuitive on your HD Devices.</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos
            provident quidem. Quaerat expedita dignissimos perferendis, nihil quo distinctio eius architecto
            reprehenderit maiores.</p>
        <a href="#"
            class="button button-border button-rounded button-large noleftmargin topmargin-sm">Lebih Lanjut</a>
    </div>
    <div class="line"></div>
</div>    
@endsection