@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Artikel</h4>
        <div class="row">
          <div class="col-12">
            <a class="btn btn-outline-info float-right" style="margin-bottom: 10px" href="{{ route('admin.artikel.tambah') }}">Tambah Data</a>
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Gambar</th>
                      <th>Judul Artikel</th>
                      <th>Isi Artikel</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($articles as $article)
                  <tr>
                    <td> {{ $article -> id }} </td>
                    <td> <img src="{{ asset('uploads/admin/article/'. $article->gambar) }}" width="20px" height="auto" alt=""> </td>
                    <td> {{ substr($article -> title, 0, 30) }} </td>
                    <td> {{ substr($article -> content, 0,50) }} </td>
                    <td>
                        <button class="btn btn-outline-info" data-toggle="modal" data-target="#Modal{{ $article->id }}">Info</button>
                        <a href="{{ route('admin.artikel.edit', $article->id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ route('admin.artikel.hapus', $article->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-outline-danger">Hapus</button>
                        </form>
                    </td>
                  </tr>
                  {{-- modal --}}
                  <div class="modal fade" id="Modal{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="text-center" ><img src="{{ asset('uploads/admin/article/'. $article->gambar) }}" width="500px" height="330px" alt=""></p>
                          <h3 style="margin-left:200px">Judul Artikel : {{ $article-> title }}</h3>
                          <h3 style="margin-left:200px">Isi Artikel : {{ $article-> content }}</h3>
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