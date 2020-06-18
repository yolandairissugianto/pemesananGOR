@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
          
    <div class="row grid-margin">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Edit</h4>
            <form action="{{ route('admin.artikel.editdata', $article->id) }}" enctype="multipart/form-data" method="post">
              @method('PATCH')
              @csrf
              <fieldset>
                  <div class="form-group">
                      <div class="col-lg-12 -margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title d-flex">Gambar Acara
                              <small class="ml-auto align-self-end">
                                <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a>
                              </small>
                            </h4>
                            <input type="hidden" value="{{ $article->gambar }}" name="old_gambar">
                            <input data-default-file={{ asset('uploads/admin/article/'.$article->gambar) }} 
                            type="file" class="dropify" name="gambar" />
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="form-group">
                  <label for="title">Judul Artikel</label>
                  <input value="{{ $article->title }}" id="title" class="form-control" name="title" minlength="2" type="text" required>
                </div>
                <div class="form-group">
                  <label for="content">Isi Artikel</label>
                  <textarea class="form-control" name="content" id="content" rows="4">{{ $article->content }}</textarea>
                </div>
                <input class="btn btn-outline-warning" type="submit" value="update">
                <a href="{{ route('admin.artikel') }}" class="btn btn-outline-danger">Cancel</a>  
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection