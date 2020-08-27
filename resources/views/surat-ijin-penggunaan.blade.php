<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Ijin Penggunaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 12px;
            line-height: 1.2;
        }
    </style>
</head>
<body>
<div class="container">
    <h6 class="text-center">PEMERINTAH KABUPATEN TEGAL</h6>
    <h6 class="text-center">DINAS PEMUDA OLAHRAGA & PARIWISATA</h6>
    <h5 class="text-center"><strong>UPTD PENGELOLAAN GOR TRISANJA</strong></h5>
    <h6 class="text-center"><i>Alamat : Jl. Djuanda No. 01 Slawi 52417</i></h6>
    <hr style="height:2px;border-top:1px solid black;border-bottom:5px solid black;">
    <h6 class="text-center"><b>IJIN PEMAKAIAN KEKAYAAN DAERAH</b></h6>
    <h6 class="text-center"><b>BERUPA LAPANGAN GOR/GOR INDOOR/KOLAM RENANG</b></h6>
    <hr style="height:2px;border-top:1px solid black;border-bottom:1px solid black;">
{{--    <p class="text-center">Nomor: 556/UPTD GOR/19/III/2020</p>--}}
    <p><b>I. DASAR</b></p>
    <ol type="a" class="mb-0">
        <li>
            <p>Peraturan Daerah Kabupaten Tegal Nomor: 3 Tahun 2014 tentang Perubahan Atas Peraturan Daerah
                Kabupaten Tegal Nomor: 2 Tahun 2012 tentang Retribusi Daerah.</p>
        </li>
        <li>
            <p>Surat Permohonan dari {{ $pemesanan->nama }} tanggal {{ \Carbon\Carbon::parse($pemesanan->start)->translatedFormat('d F Y') }} Perihal
                Permohonan Izin Peminjaman Tempat {{ $pemesanan->fasilitas->nama_fasilitas }} GOR Trisanja Slawi untuk Kegiatan
                {{ $pemesanan->kegiatan }}.</p>
        </li>
    </ol>
    <p><b>II. DIBERIKAN IJIN KEPADA</b></p>
    <ol type="a" class="mb-0">
        <li>
            <p>Nama &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;: {{ $pemesanan->nama }}</p>
        </li>
        <li>
            <p>Kegiatan &#160;&#160;&#160;&#160;: {{ $pemesanan->kegiatan }}</p>
        </li>
    </ol>
    <p class="ml-sm-4"><b>Masa berlaku ijin</b></p>
    <p class="ml-sm-4">Waktu Mulai &#160;&#160;&#160;: {{ \Carbon\Carbon::parse($pemesanan->start)->translatedFormat('l, d F Y') }}</p>
    <p class="ml-sm-4">Waktu Selesai &#160;: {{ \Carbon\Carbon::parse($pemesanan->finish)->translatedFormat('l, d F Y') }}</p>
    <p class="ml-sm-4">Tempat &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;: {{ $pemesanan->fasilitas->nama_fasilitas }}</p>
    <p><b>III. DENGAN KETENTUAN YANG HARUS DITAATI PEMEGANG IJIN</b></p>
    <ol type="a" class="mb-0">
        <li>
            <p>Kewajiban membayar Retribusi sesuai dengan Peraturan Daerah Nomor 3 Tahun 2014.</p>
        </li>
        <li>
            <p>Sanggup dan bertanggung jawab menjaga kebersihan lapangan dan sekitarnya setelah dipergunakan.</p>
        </li>
        <li>
            <p>Sanggup menjaga keamanan dan ketertiban serta Sarana Prasarana di Kawasan GOR Trisanja.</p>
        </li>
        <li>
            <p>Apabila terjadi kerusakan (pada poin c) maka Penyewa harus bertanggungjawab memperbaikinya.</p>
        </li>
        <li>
            <p>Dilarang menyertakan pedagang yang bukan sponsor baik atas nama panitia maupun bukan panitia tanpa seijin UPTD Pengelola Kawasan GOR Trisanja Slawi.</p>
        </li>
    </ol>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4 float-right">
            <p>Dikeluarkan di: Slawi</p>
            <p class="text-center"> Pada tanggal : {{ \Carbon\Carbon::parse(now())->translatedFormat('l, d F Y') }}</p>
            <br><br><br>
            <p class="text-center"><b><u>NUR DWI ROHADI, S. Pd.</u></b></p>
            <p class="text-center">NIP. 19640507 198802 1 001</p>
        </div>
    </div>
</div>
</body>
</html>
