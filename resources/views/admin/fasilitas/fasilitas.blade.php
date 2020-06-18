@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Fasilitas</h4>
        <div class="row">
          <div class="col-12">
            <a class="btn btn-outline-info float-right" style="margin-bottom: 10px" href="{{ route('admin.fasilitas.tambah') }}">Tambah Data</a>
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Gambar</th>
                      <th>Nama Fasilitas</th>
                      <th>Deskripsi Fasilitas</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($facilities as $facility)
                  <tr>
                    <td> {{ $facility -> id }} </td>
                    <td><img src="{{ asset('uploads/admin/fasilitas/'. $facility->gambar) }}" width="20px" height="auto"/></td>
                    <td> {{ $facility-> nama_fasilitas }} </td>
                    <td> {{ $facility-> deskripsi }} </td>
                    <td>
                      <button class="btn btn-outline-info">Info</button>
                      <a href="{{ route('admin.fasilitas.edit', $facility->id) }}" class="btn btn-outline-warning">Edit</a>
                      <button class="btn btn-outline-danger">Hapus</button>
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
@endsection