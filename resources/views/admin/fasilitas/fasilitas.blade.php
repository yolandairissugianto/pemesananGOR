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
                    <td> {{ substr($facility-> deskripsi, 0, 30) }} </td>
                    <td>
                      <button class="btn btn-outline-info" data-toggle="modal" data-target="#Modal{{ $facility->id }}">Info</button>
                      <a href="{{ route('admin.fasilitas.edit', $facility->id) }}" class="btn btn-outline-warning">Edit</a>
                      <form action="{{ route('admin.fasilitas.hapus', $facility->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  {{-- modal --}}
                  <div class="modal fade" id="Modal{{ $facility->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="text-center" ><img src="{{ asset('uploads/admin/fasilitas/'. $facility->gambar) }}" width="500px" height="330px"/></p>
                          <h3 style="margin-left:200px">Nama Fasilitas : {{ $facility-> nama_fasilitas }}</h3>
                          <h3 style="margin-left:200px">Deskripsi : {{ $facility-> deskripsi }}</h3>
                          <h3 style="margin-left:200px">Tarif penggunaan untuk olahraga siang : {{ $facility->olahraga_siang }}</h3>
                          <h3 style="margin-left:200px">Tarif Penggunaan untuk olahraga malam : {{ $facility->olahraga_malam }}</h3>
                          <h3 style="margin-left:200px">Tarif Penggunaan selain olahraga (Menarik Karcis dan Sponsor) : {{ $facility->dengan_karcis_sponsor }}</h3>
                          <h3 style="margin-left:200px">Tarif Penggunaan selain olahraga (Dengan Sponsor) : {{ $facility->dengan_sponsor }}</h3>
                          <h3 style="margin-left:200px">Tarif Penggunaan selain olahraga (Tanpa Karcis dan Sponsor) : {{ $facility->tanpa_karcis_sponsor }}</h3>
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
@endsection
