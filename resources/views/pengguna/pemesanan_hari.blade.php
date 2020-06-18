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
    <div class="container clearfix">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik"
                        placeholder="NIK Penanggung Jawab">
                </div>
                <div class="form-group col-md-6">
                    <label for="penanggung_jawab">Penganggung Jawab</label>
                    <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab"
                        placeholder="Penanggung Jawab / Nama Pemesan">
                </div>
            </div>
            <div class="form-group">
                <label for="io">IO / Penyelenggara</label>
                <input type="text" class="form-control" id="io" name="io" placeholder="IO / Penyelenggara">
            </div>
            <div class="form-group">
                <label for="kegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Nama Kegiatan">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Kegiatan</label>
                <textarea class="form-control" id="deskripsi" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas yang dipinjam</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas" 
                placeholder="Misal : Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)">
            </div>

            {{-- <div class="form-group"">
                <label for="">Date Range</label>
                <div class=" input-daterange input-group">
                <input type="text" value="" class="form-control tleft" placeholder="04/04/2020">
                <div class="input-group-prepend">
                    <div class="input-group-text">to</div>
                </div>
                <input type="text" value="" class="form-control tleft" placeholder="05/04/2020">
                </div>
            </div> --}}

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mulai">Tanggal Mulai</label>
                    <input type="text" class="form-control" id="mulai" name="mulai"
                        placeholder="format : tanggal/bulan/tahun (05/11/2020)">
                </div>
                <div class="form-group col-md-6">
                    <label for="selesai">Tanggal Selesai</label>
                    <input type="text" class="form-control" id="selesai" name="selesai"
                        placeholder="format : tanggal/bulan/tahun (07/11/2020)">
                </div>
            </div>

            <div class="form-group">
                <label>Upload Surat Pengajuan</label><br>
                <input id="surat" type="file" class="file" data-show-preview="false" name="surat">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="no_telp">Nomor Telepon</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp"
                        placeholder="nomor telepon yang bisa dihubungi">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Pesan Tempat</button>
        </form>
    </div>
</div>
@endsection