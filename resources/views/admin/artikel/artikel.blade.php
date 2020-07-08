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
                      <a href="{{ route('admin.artikel.info', $article->id) }}" class="btn btn-outline-info">Info</a>
                      <a href="{{ route('admin.artikel.edit', $article->id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ route('admin.artikel.hapus', $article->id) }}" method="post">
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
@endsection