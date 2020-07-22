@extends('admin.templates.default')

@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Pemesanan</h4>
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
                            <p class="text-google">Sudah Bayar</p>
                        @elseif($pemesanan->terima_pengajuan)
                            <p class="text-behance">Menunggu Pembayaran</p>
                            <a href="{{ route('admin.pemesanan.terima_pembayaran', $pemesanan) }}" class="btn btn-sm btn-outline-twitter">
                                <i class="mdi mdi-check"></i>&emsp;Sudah bayar dan Kirim Notif</a>
                        @elseif($pemesanan->have_sent_code)
                            <p class="text-behance">Sudah kirim kode ke Bot Telegram</p>
                            <a href="{{ route('admin.pemesanan.terima_pengajuan', $pemesanan) }}" class="btn btn-sm btn-outline-dribbble">
                                <i class="mdi mdi-send"></i>&emsp;Terima Pengajuan dan Kirim Notifikasi</a>
                        @else
                            <p class="text-danger">Menunggu peminjam mengirim kode ke BOT</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
