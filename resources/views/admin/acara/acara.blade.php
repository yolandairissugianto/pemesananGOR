@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">

  <div class="card">
    <div>
      <div class="card-body">
        <h4 class="card-title">Data Acara</h4>
        <div class="row">
          <div class="col-12">
{{--            <a class="btn btn-outline-info float-right" style="margin-bottom: 10px" href="{{ route('admin.acara.tambah') }}">Tambah Data</a>--}}
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Fasilitas</th>
                      <th>Nama Acara</th>
                      <th>Deskripsi</th>
                      <th>Waktu Mulai</th>
                      <th>Waktu Selesai</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($events as $event)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('uploads/admin/fasilitas/'. $event->fasilitas->gambar) }}" width="20px" height="auto"/></td>
                    <td>{{ $event->kegiatan }}</td>
                    <td>{{ $event->deskripsi }}</td>
                    <td>{{ $event->start }}</td>
                    <td>{{ $event->finish }}</td>
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
</div>
@endsection
