@extends('pengguna.templates.default')

<title>Form Pemesanan</title>

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Daftar Booking</h1>
            <span>Berikut ini adalah beberapa daftar dari waktu booking untuk fasilitas 1. Mohon pilih selain yang ada di daftar</span>
        </div>
    </section>
    <div class="content-wrap">
        <div class="container clearfix">
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
        </div>
    </div>
    <section id="page-title">
        <div class="container clearfix">
            @if($tipe == 1)
                <h1>FORM PEMINJAMAN TEMPAT PERHARI UNTUK KEGIATAN YANG MENARIK KARCIS DAN SPONSOR</h1>
            @elseif($tipe == 2)
                <h1>FORM PEMINJAMAN TEMPAT PERHARI UNTUK KEGIATAN YANG HANYA DENGAN SPONSOR</h1>
            @else
                <h1>FORM PEMINJAMAN TEMPAT PERHARI UNTUK KEGIATAN TANPA KARCIS DAN SPONSOR</h1>
            @endif
            <span>Untuk Meminjam Tempat Isi Form Dibawah Ini</span>
        </div>
    </section>
    <div class="content-wrap">
        <div class="container clearfix">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">×</span></button>
                    <h3 class="text-success"><i class="fa fa-exclamation-triangle"></i> Success</h3> {{ $message }}
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">×</span></button>
                    <h3 class="text-danger"><i class="fa fa-exclamation-triangle"></i> Kasalahan</h3> {{ $message }}
                </div>
            @endif
            <form method="POST" action="{{ route('pengguna.pesan.perhari', [$facility, $tipe]) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="fasilitas">Fasilitas yang dipinjam</label>
                    <input type="hidden" name="id_fasilitas" value="{{ $facility->id }}">
                    <input readonly="" type="text" class="form-control" id="fasilitas" name="fasilitas"
                           value="{{ $facility->nama_fasilitas }}">
                </div>
                <div class="form-row">
                    {{--                <div class="form-group col-md-6">--}}
                    {{--                    <label for="nik">NIK</label>--}}
                    {{--                    <input type="text" class="form-control" name="nik" id="nik"--}}
                    {{--                        placeholder="NIK Penanggung Jawab">--}}
                    {{--                </div>--}}
                    <div class="form-group col-md-6">
                        <label for="penanggung_jawab">Penganggung Jawab</label>
                        <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab"
                               placeholder="Penanggung Jawab / Nama Pemesan">
                    </div>
                </div>
                {{--            <div class="form-group">--}}
                {{--                <label for="eo">EO / Penyelenggara</label>--}}
                {{--                <input type="text" class="form-control" id="eo" name="eo" placeholder="EO / Penyelenggara">--}}
                {{--            </div>--}}
                {{--            <div class="form-group">--}}
                {{--                <label for="kegiatan">Nama Kegiatan</label>--}}
                {{--                <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Nama Kegiatan">--}}
                {{--            </div>--}}
                {{--            <div class="form-group">--}}
                {{--                <label for="deskripsi">Deskripsi Kegiatan</label>--}}
                {{--                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>--}}
                {{--            </div>--}}

                {{-- <div class="form-group">
                    <label>Tanggal dan Jam yang akan dipesan :</label>
                    <input type="text" class="form-control daterange2"
                    value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" name="date" />
                </div> --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="start">Tanggal Mulai Kegitan</label>
                        <input type="date" class="form-control" id="start" name="start">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="finish">Tanggal Selesai Kegitan</label>
                        <input type="date" class="form-control" id="finish" name="finish">
                    </div>
                </div>

                {{--            <div class="form-group">--}}
                {{--                <label>Upload Surat Pengajuan</label><br>--}}
                {{--                <input id="suart" name="surat" type="file" class="file" data-show-preview="false">--}}
                {{--            </div>--}}
                {{--            <div class="form-row">--}}
                {{--                <div class="form-group col-md-6">--}}
                {{--                    <label for="no_telp">Nomor Telepon</label>--}}
                {{--                    <input type="text" class="form-control" id="no_telp" name="no_telp"--}}
                {{--                        placeholder="nomor telepon yang bisa dihubungi">--}}
                {{--                </div>--}}
                {{--                <div class="form-group col-md-6">--}}
                {{--                    <label for="no_telp">Email</label>--}}
                {{--                    <input type="email" class="form-control" id="email" name="email"--}}
                {{--                           placeholder="Email">--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <button type="submit" class="btn btn-primary">Pesan Tempat</button>
            </form>
        </div>
    </div>
@endsection
