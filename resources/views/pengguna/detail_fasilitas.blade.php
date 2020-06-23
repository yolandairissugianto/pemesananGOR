@extends('pengguna.templates.default')

<title>Detail Fasilitas</title>

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Fasilitas</h1>
        <span>Aritkel berkaitan dengan GOR Trisanja</span>
    </div>
</section>

<div class="content-wrap">
    <div class="container clearfix">
        <div class="single-post nobottommargin">
            <div class="entry clearfix">
                <div class="entry-title">
                    <h1>{{ $facility-> nama_fasilitas }}</h1>
                </div>

                <div class="entry-image bottommargin">
                    <img src="{{ asset('uploads/admin/fasilitas/'. $facility -> gambar) }}" width="auto" height="auto" alt="">
                </div>

                <div class="entry-content notopmargin">
                    <h4>{{ $facility -> deskripsi }}</h4>
                    <p> 
                    </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kegiatan</th>
                                <th>Lama Peminjaman</th>
                                <th>Harga</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Penggunaan untuk olahraga siang</td>
                                <td>1 Jam</td>
                                <td>{{ $facility -> olahraga_siang }}</td>
                                <td><a href="{{ route('pengguna.pemesanan_jam') }}"
                                    class="button button-border button-rounded button-small noleftmargin ">Pesan Tempat</a></td>
                            </tr>
                            <tr>
                                <td>Penggunaan untuk olahraga malam</td>
                                <td>1 Jam</td>
                                <td>{{ $facility -> olahraga_malam }}</td>
                                <td><a href="{{ route('pengguna.pemesanan_jam') }}"
                                    class="button button-border button-rounded button-small noleftmargin ">Pesan Tempat</a></td>
                            </tr>
                            <tr>
                                <td>Penggunaan selain olahraga (Menarik Karcis dan Sponsor)</td>
                                <td>1 Hari</td>
                                <td>{{ $facility -> dengan_karcis_sponsor }}</td>
                                <td><a href="{{ route('pengguna.pemesanan_hari') }}"
                                    class="button button-border button-rounded button-small noleftmargin ">Pesan Tempat</a></td>
                            </tr>
                            <tr>
                                <td>Penggunaan selain olahraga (Dengan Sponsor)</td>
                                <td>1 Hari</td>
                                <td>{{ $facility -> dengan_sponsor }}</td>
                                <td><a href="{{ route('pengguna.pemesanan_hari') }}"
                                    class="button button-border button-rounded button-small noleftmargin ">Pesan Tempat</a></td>
                            </tr>
                            <tr>
                                <td>Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)</td>
                                <td>1 Hari</td>
                                <td>{{ $facility -> tanpa_karcis_sponsor }}</td>
                                <td><a href="{{ route('pengguna.pemesanan_hari') }}"
                                    class="button button-border button-rounded button-small noleftmargin">Pesan Tempat</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                class="button button-3d nomargin">Pesan Tempat</button> -->
        </div>
    </div>
</div>
@endsection