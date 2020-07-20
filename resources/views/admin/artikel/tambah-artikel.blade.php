@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
          
    <div class="row grid-margin">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Tambah Artikel</h4>
            <form enctype="multipart/form-data" class="cmxform" method="post" action="{{ route('admin.artikel.tambahdata') }}">
              @csrf
              <fieldset>
                <div class="form-group">
                  <div class="col-lg-12 -margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title d-flex">Gambar Artikel
                          <small class="ml-auto align-self-end">
                            <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a>
                          </small>
                        </h4>
                        <input type="file" data-allowed-file-extensions="png jpeg jpg"
                              data-max-file-size="2M" name="gambar" class="dropify" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="title">Judul Artikel</label>
                  <input class="form-control {{ $errors->has('title')?'is-invalid':'' }}" name="title" minlength="2" type="text" value="{{ old('title') }}">
                  @if ($errors->has('title'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('title') }}</b></p>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="content">Isi Artikel</label>
                  <textarea class="form-control {{ $errors->has('content')?'is-invalid':'' }}" id="content" name="content" rows="4">{{ old('content') }}</textarea>
                  @if ($errors->has('content'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('content') }}</b></p>
                      </span>
                  @endif
                </div>
                <input class="btn btn-outline-success" type="submit" value="Submit">
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection