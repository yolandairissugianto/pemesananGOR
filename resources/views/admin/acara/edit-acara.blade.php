@extends('admin.templates.default')

@section('content')
<div class="row grid-margin">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Tambah Acara</h4>
        <form enctype="multipart/form-data" method="post" action="{{ route('admin.acara.editdata', $event->id) }}">
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
                        <input type="hidden" value="{{ $event->gambar }}" name="old_gambar">
                          <input data-default-file={{ asset('uploads/admin/acara/'.$event->gambar) }} 
                            type="file" class="dropify" name="gambar" data-allowed-file-extensions="png jpeg jpg"
                            data-max-file-size="2M" name="gambar" />
                      </div>
                    </div>
                  </div>
                </div>
            <div class="form-group">
              <label for="judul">Nama Acara</label>
              <input value="{{ $event -> judul }}" class="form-control {{ $errors->has('judul')?'is-invalid':'' }}" name="judul" minlength="2" type="text">
              @if ($errors->has('judul'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('judul') }}</b></p>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi Acara</label>
              <textarea class="form-control {{ $errors->has('deskripsi')?'is-invalid':'' }}" name="deskripsi" rows="4">{{ $event -> deskripsi }}</textarea>
              @if ($errors->has('deskripsi'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('deskripsi') }}</b></p>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal Pelaksanaan</label>
              <input class="form-control" name="tanggal" value="{{ $event -> tgl_acara }}">
            </div>
            <div class="form-group">
              <label for="jam">Jam Pelaksanaan</label>
              <input class="form-control" name="jam" value="{{ $event -> jam_acara }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Update">
            <a href="{{ route('admin.acara') }}" class="btn btn-outline-danger">Cancel</a> 
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection