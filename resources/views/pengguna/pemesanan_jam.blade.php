@extends('pengguna.templates.default')

<title>Form Pemesanan</title>

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>FORM PEMINJAMAN TEMPAT</h1>
            <span>Untuk Meminjam Tempat Isi Form Dibawah Ini</span>
        </div>
    </section>

    <div class="content-wrap">
        @if ($message = Session::get('error'))
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                        aria-hidden="true">×</span></button>
                <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3> {{ $message }}
            </div>
        @endif
        <div class="container clearfix">
            <form method="POST" action="{{ route('pengguna.pesan.perjam') }}" enctype="multipart/form-data">
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
                    <div class="form-group col-md-4">
                        <label for="tgl_kegiatan">Tanggal Kegitan</label>
                        <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="mulai">Jam Mulai Kegiatan</label>
                        <input type="time" min="06:00" max="20:00" step="3600" class="form-control" id="mulai"
                               name="jam_mulai">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="selesai">Jam Kegiatan Selesai</label>
                        <input type="time" min="07:00" max="21:00" step="3600" class="form-control" id="selesai"
                               name="jam_selesai">
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
