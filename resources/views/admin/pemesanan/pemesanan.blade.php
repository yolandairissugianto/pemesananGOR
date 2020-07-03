@extends('admin.templates.default')

@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pemesanan</h4>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-info float-right" style="margin-bottom: 10px" href="#">Tambah Data</a>
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Fasilitas</th>
                                    <th>PJ</th>
                                    <th>EO</th>
                                    <th>Kegiatan</th>
                                    <th>Lama Kegiatan</th>
                                    <th>Start</th>
                                    <th>Finish</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pemesanans as $key => $pemesanan)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $pemesanan->fasilitas->nama_fasilitas }}</td>
                                        <td>{{ $pemesanan->nama }}</td>
                                        <td>{{ $pemesanan->event_organizer }}</td>
                                        <td>{{ $pemesanan->kegiatan }}</td>
                                        @if($pemesanan->penggunaan_olahraga_siang != null || $pemesanan->penggunaan_olahraga_malam != null)
                                            <td>
                                                {{ (($pemesanan->penggunaan_olahraga_siang != null) ? $pemesanan->penggunaan_olahraga_siang : 0)
                                                + (($pemesanan->penggunaan_olahraga_malam != null) ? $pemesanan->penggunaan_olahraga_malam : 0) }}
                                                Jam
                                            </td>
                                        @elseif($pemesanan->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor != null)
                                            <td>{{ $pemesanan->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor }}
                                                Hari
                                            </td>
                                        @elseif($pemesanan->penggunaan_selain_olahraga_dengan_sponsor != null)
                                            <td>{{ $pemesanan->penggunaan_selain_olahraga_dengan_sponsor }} Hari</td>
                                        @elseif($pemesanan->penggunaan_selain_olahraga_tanpa_karcis_sponsor != null)
                                            <td>{{ $pemesanan->penggunaan_selain_olahraga_tanpa_karcis_sponsor }}Hari
                                            </td>
                                        @endif
                                        <td>{{ \Illuminate\Support\Carbon::create($pemesanan->start)->format('d-m-y H:i') }}</td>
                                        <td>{{ \Illuminate\Support\Carbon::create($pemesanan->finish)->format('d-m-y H:i') }}</td>
                                        @if($pemesanan->already_paid)
                                            <td class="text-success">Sudah bayar</td>
                                        @elseif($pemesanan->terima_pengajuan)
                                            <td class="text-info">Menunggu Pembayaran</td>
                                        @elseif($pemesanan->have_sent_code)
                                            <td class="text-warning">Menunggu Pengajuan Diterima</td>
                                        @else
                                            <td class="text-danger">Menunggu peminjam mengirim kode ke BOT</td>
                                        @endif
                                        <td><a href="{{ route('admin.pemesanan.detail', $pemesanan) }}" class="btn btn-outline-google">detail</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
