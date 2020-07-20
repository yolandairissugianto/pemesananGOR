@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
    
  <div class="card">
    <div>
      <div class="card-body">
        <h4 class="card-title">Data Acara</h4>
        <div class="row">
          <div class="col-12">
            <a class="btn btn-outline-info float-right" style="margin-bottom: 10px" href="{{ route('admin.acara.tambah') }}">Tambah Data</a>
            <div class="table-responsive">
              <table id="order-listing" class="table"> 
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Gambar</th>
                      <th>Nama Acara</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Pelaksanaan</th>
                      <th>Waktu Pelaksanaan</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($events as $event)
                  <tr>
                    <td>{{ $event -> id }}</td>
                    <td><img src="{{ asset('uploads/admin/acara/'. $event->gambar) }}" width="20px" height="auto"/></td>
                    <td>{{ substr($event -> judul, 0, 20) }}</td>
                    <td>{{ substr($event -> deskripsi, 0, 30) }}</td>
                    <td>{{ $event -> tgl_acara }}</td>
                    <td>{{ $event -> jam_acara }}</td>
                    <td>
                      <a href="{{ route('admin.acara.info', $event->id) }}" class="btn btn-outline-info">Info</a>
                      <a href="{{ route('admin.acara.edit', $event->id) }}" class="btn btn-outline-warning">Edit</a>
                      <form action="{{ route('admin.acara.hapus', $event->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Hapus</button>
                      </form>
                    </td>
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