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
                        <img src="{{ asset('uploads/admin/fasilitas/'. $facility -> gambar) }}" width="auto"
                             height="auto" alt="">
                    </div>

                    <div class="entry-content">
                        <h4>{{ $facility -> deskripsi }}</h4>
                        <br>
                        <br>
                        <h3>Data Peminjaman</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Peminjam</th>
                                <th>Lama Peminjaman</th>
                                <th>Start</th>
                                <th>Finish</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pemesanans as $pemesanan)
                                <tr>
                                    <td>{{ $pemesanan->id }}</td>
                                    <td>{{ $pemesanan->nama }}</td>
                                    @if($pemesanan->penggunaan_olahraga_siang != null || $pemesanan->penggunaan_olahraga_malam != null)
                                        <td>
                                            {{ (($pemesanan->penggunaan_olahraga_siang != null) ? $pemesanan->penggunaan_olahraga_siang : 0)
                                            + (($pemesanan->penggunaan_olahraga_malam != null) ? $pemesanan->penggunaan_olahraga_malam : 0) }}
                                            Jam
                                        </td>
                                    @elseif($pemesanan->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor != null)
                                        <td>{{ $pemesanan->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor }} Hari</td>
                                    @elseif($pemesanan->penggunaan_selain_olahraga_dengan_sponsor != null)
                                        <td>{{ $pemesanan->penggunaan_selain_olahraga_dengan_sponsor }} Hari</td>
                                    @elseif($pemesanan->penggunaan_selain_olahraga_tanpa_karcis_sponsor != null)
                                        <td>{{ $pemesanan->penggunaan_selain_olahraga_tanpa_karcis_sponsor }} Hari</td>
                                    @endif
                                    <td>{{ \Carbon\Carbon::parse($pemesanan->start)->translatedFormat('l, d M Y H:i') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($pemesanan->finish)->addSeconds()->translatedFormat('l, d M Y H:i') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <br>
                        <br>
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
                                <td>
                                    Penggunaan untuk olahraga
                                    <br>Siang: 06.00-17.00
                                    <br>Malam: 17.00-21.00
                                </td>
                                <td>1 Jam</td>
                                <td>
                                    Siang: {{ $facility -> olahraga_siang }}
                                    <br>Malam: {{ $facility -> olahraga_malam }}
                                </td>
                                <td>
                                    <a href="{{ route('pengguna.pemesanan_jam', $facility) }}"
                                       class="button button-border button-rounded button-small noleftmargin ">Pesan
                                        Tempat</a></td>
                            </tr>
                            <tr>
                                <td>Penggunaan selain olahraga (Menarik Karcis dan Sponsor)</td>
                                <td>1 Hari</td>
                                <td>{{ $facility -> dengan_karcis_sponsor }}</td>
                                <td>
                                    <a href="{{ route('pengguna.pemesanan_hari', ['facility' => $facility, 'tipe' => \App\Pemesanan::$PEMINJAMAN_MENARIK_KARCIS_DAN_SPONSOR]) }}"
                                       class="button button-border button-rounded button-small noleftmargin ">Pesan
                                        Tempat</a></td>
                            </tr>
                            <tr>
                                <td>Penggunaan selain olahraga (Dengan Sponsor)</td>
                                <td>1 Hari</td>
                                <td>{{ $facility -> dengan_sponsor }}</td>
                                <td>
                                    <a href="{{ route('pengguna.pemesanan_hari', ['facility' => $facility, 'tipe' => \App\Pemesanan::$PEMINJAMAN_HANYA_DENGAN_SPONSOR]) }}"
                                       class="button button-border button-rounded button-small noleftmargin ">Pesan
                                        Tempat</a></td>
                            </tr>
                            <tr>
                                <td>Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)</td>
                                <td>1 Hari</td>
                                <td>{{ $facility -> tanpa_karcis_sponsor }}</td>
                                <td><a href="{{ route('pengguna.pemesanan_hari', ['facility' => $facility, 'tipe' => \App\Pemesanan::$PEMINJAMAN_TANPA_KARCIS_DAN_SPONSOR]) }}"
                                       class="button button-border button-rounded button-small noleftmargin">Pesan
                                        Tempat</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
