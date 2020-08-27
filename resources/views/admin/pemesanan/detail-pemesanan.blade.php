@extends('admin.templates.default')

@section('content')
    <div class="content-wrapper">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong class="text-google">{{ $message }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.pemesanan.download.pengajuan', $pemesanan) }}"
                   class="btn btn-sm btn-outline-dribbble">Download Surat Pengajuan</a>
                <h4 class="card-title mt-3">Detail Pemesanan</h4>
                <div class="row">
                    <div class="col-12">
                        <p>Fasilitas :</p>
                        <p>{{ $pemesanan->fasilitas->nama_fasilitas }}</p><br>
                        <p>Penanggung Jawab :</p>
                        <p>{{ $pemesanan->nama }}</p><br>
                        <p>Event Organizer :</p>
                        <p>{{ $pemesanan->event_organizer }}</p><br>
                        <p>Kegiatan :</p>
                        <p>{{ $pemesanan->kegiatan }}</p><br>
                        <p>Status :</p>
                        @if($pemesanan->already_paid)
                            <p class="text-google">Pemesanan telah selesai</p>
                        @elseif($pemesanan->terima_pengajuan)
                            <p class="text-behance">Menunggu Pembayaran</p>
                            <a class="btn btn-sm btn-outline-twitter" href="{{ route('admin.pemesanan.kirim-ijin-penggunaan', $pemesanan->id) }}">
                                <i class="mdi mdi-send"></i>&emsp;Kirim Surat Ijin Penggunaan
                            </a>
                        @elseif($pemesanan->have_sent_code)
                            <p class="text-behance">Sudah kirim kode ke Bot Telegram</p>
                            <a href="{{ route('admin.pemesanan.terima_pengajuan', $pemesanan) }}"
                               class="btn btn-sm btn-outline-dribbble">
                                <i class="mdi mdi-send mt-3"></i>&emsp;Terima Pengajuan dan Kirim Notifikasi</a>
                        @else
                            <p class="text-danger">Menunggu peminjam mengirim kode ke BOT</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
