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
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="#">
                        <img src="{{ asset('images/events/thumbs/job fair.jpeg') }}"
                            alt="Inventore voluptates velit totam ipsa tenetur">
                        <div class="entry-date">2<span>Sep</span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="#">Job Fair Slawi – September 2019</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><span class="badge badge-info">Public</span></li>
                        <li><a href="#"><i class="icon-time"></i> 11:00 - 16:00</a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i>GOR Trisanja Slawi</a></li>
                    </ul>
                    <div class="entry-content">
                        <p>Diikuti Kurang Lebih 40 Perusahaan dari Ratusan Lowongan Tersedia (Terbuka Untuk
                            Umum & Semua Jurusan). pendaftaran secara online dan harus membawa barcode yang
                            sudah di print sebagai akses masuk lokasi Job Fair.</p>
                        <a href="#" class="btn btn-secondary" disabled="disabled">Buy Tickets</a> 
                    </div>
                </div>
            </div>
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="#">
                        <img src="{{ asset('images/events/thumbs/nduren.jpg') }}"
                            alt="Nemo quaerat nam beatae iusto minima vel">
                        <div class="entry-date">30<span>Ags</span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="#">Pembukaan Festival “N’duren Bareng Neng Tegal” di Slawi</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><span class="badge badge-info">Public</span></li>
                        <li><a href="#"><i class="icon-time"></i> 08:00 - 24:00</a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i>Halaman Depan GOR Trisanja</a></li>
                    </ul>
                    <div class="entry-content">
                        <p>Bupati Tegal Ibu Dra. Umi Azizah membuka langsung Event “N’Duren Bareng Nang
                            Tegal” di GOR Trisanja Slawi pada pukul 08:30 Jum’at pagi kemarin (8/3)</p>
                        <a href="#" class="btn btn-info">RSVP</a> 
                    </div>
                </div>
            </div>
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="#">
                        <img src="{{ asset('images/events/thumbs/nsbc.jpeg') }}"
                            alt="Ducimus ipsam error fugiat harum recusandae">
                        <div class="entry-date">24<span>Ags</span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="#">Polres Tegal Amankan Slawi Night Batik Carnaval</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><span class="badge badge-info">Public</span></li>
                        <li><a href="#"><i class="icon-time"></i> 18:00 - 22:00</a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i>Halaman Depan GOR Trisanja</a></li>
                    </ul>
                    <div class="entry-content">
                        <p>Pertama kali diadakan di Kabupaten Tegal Festival Batik Slawi Night Batik
                            Carnaval disambut antusias oleh Masyarakat Kabupaten Tegal. Terbukti sepanjang
                            jalan Ir. Juanda mulai dari Kantor Dukcapil hingga Gor Trisanja</p>
                        <a href="#" class="btn btn-secondary">Buy Tickets</a> 
                    </div>
                </div>
            </div>

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