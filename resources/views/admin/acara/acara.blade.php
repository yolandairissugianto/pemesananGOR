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
                      <button class="btn btn-outline-info" data-toggle="modal" data-target="#Modal{{ $event->id }}">Info</button>
                      <a href="{{ route('admin.acara.edit', $event->id) }}" class="btn btn-outline-warning">Edit</a>
                      <form action="{{ route('admin.acara.hapus', $event->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>

                  {{-- modal --}}
                  <div class="modal fade" id="Modal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="text-center" ><img src="{{ asset('uploads/admin/acara/'. $event->gambar) }}" width="500px" height="330px" alt=""></p>
                          <h3 style="margin-left:200px">Nama Acara : {{ $event-> judul }}</h3>
                          <h3 style="margin-left:200px">Deskripsi : {{ $event-> deskripsi }}</h3>
                          <h3 style="margin-left:200px">Tanggal Acara : {{ $event-> tgl_acara }}</h3>
                          <h3 style="margin-left:200px">Jam Acara : {{ $event-> jam_acara }}</h3>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
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