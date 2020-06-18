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
                    <input type="text" class="form-control" name="nik" id="nik"
                        placeholder="NIK Penanggung Jawab">
                </div>
                <div class="form-group col-md-6">
                    <label for="penanggung_jawab">Penganggung Jawab</label>
                    <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab"
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
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas yang dipinjam</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas" 
                placeholder="Misal : Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)">
            </div>

            {{-- <div class="form-group">
                <label>Tanggal dan Jam yang akan dipesan :</label>
                <input type="text" class="form-control daterange2" 
                value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" name="date" />
            </div> --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tgl_kegiatan">Tanggal Kegitan</label>
                    <input type="text" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan"
                        placeholder="format : tanggal/bulan/tahun (05/11/2020)">
                </div>
                <div class="form-group col-md-4">
                    <label for="mulai">Jam Mulai Kegiatan</label>
                    <input type="text" class="form-control" id="mulai" name="mulai"
                        placeholder="Misal : 06.00 ">
                </div>
                <div class="form-group col-md-4">
                    <label for="selesai">Jam Kegiatan Selesai</label>
                    <input type="text" class="form-control" id="selesai" name="selesai"
                        placeholder="Misal :08.00">
                </div>
            </div>

            <div class="form-group">
                <label>Upload Surat Pengajuan</label><br>
                <input id="suart" name="surat" type="file" class="file" data-show-preview="false">
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