@extends('admin.templates.default')

@section('content')
    <div class="content-wrapper">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pemesanan</h4>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-info float-right" style="margin-bottom: 10px"
                           href="{{ route('admin.pemesanan.export') }}">Cetak Laporan Excel</a>
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tampilkan Acara</th>
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
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($pemesanan->event === 1)
                                                <a href="{{ route('admin.event.hide', $pemesanan) }}" class="btn btn-sm btn-outline-danger">Sembunyikan</a>
                                            @else
                                                <a href="{{ route('admin.event.show', $pemesanan) }}" class="btn btn-sm btn-outline-success">Tampilkan</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.pemesanan.detail', $pemesanan) }}">{{ $pemesanan->fasilitas->nama_fasilitas }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.pemesanan.detail', $pemesanan) }}">{{ $pemesanan->nama }}</a>
                                        </td>
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
                                            <td class="text-success">Pemesanan Telah Selesai</td>
                                        @elseif($pemesanan->terima_pengajuan)
                                            <td class="text-info">Menunggu Pembayaran</td>
                                        @elseif($pemesanan->have_sent_code)
                                            <td class="text-warning">Menunggu Pengajuan Diterima</td>
                                        @else
                                            <td class="text-danger">Menunggu peminjam mengirim kode ke BOT</td>
                                        @endif
                                        <td><a href="{{ route('admin.pemesanan.detail', $pemesanan) }}"
                                               class="btn btn-outline-google">detail</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br/>

                            {{-- <div class="float-right">
                                {{ $pemesanans->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
