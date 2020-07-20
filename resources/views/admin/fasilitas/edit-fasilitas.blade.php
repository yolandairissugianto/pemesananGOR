@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
          
  <div class="row grid-margin">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Fasilitas</h4>
          <form enctype="multipart/form-data" method="post" action="{{ route('admin.fasilitas.editdata', $facility->id) }}">
            @method('PATCH')
            @csrf
            <fieldset>
                <div class="form-group">
                    <div class="col-lg-12 -margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Gambar Fasilitas
                            <small class="ml-auto align-self-end">
                              <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a>
                            </small>
                          </h4>
                          <input type="hidden" value="{{ $facility->gambar }}" name="old_gambar">
                          <input data-default-file={{ asset('uploads/admin/fasilitas/'.$facility->gambar) }} 
                                type="file" class="dropify" name="gambar" data-allowed-file-extensions="png jpeg jpg"
                                data-max-file-size="2M" />
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <label for="nama_fasilitas">Nama Fasilitas</label>
                  <input value="{{ $facility->nama_fasilitas }}" class="form-control {{ $errors->has('nama_fasilitas')?'is-invalid':'' }}" name="nama_fasilitas" minlength="2" type="text">
                  @if ($errors->has('nama_fasilitas'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('nama_fasilitas') }}</b></p>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Singkat</label>
                  <textarea class="form-control {{ $errors->has('deskripsi')?'is-invalid':'' }}" name="deskripsi" rows="4">{{ $facility->deskripsi }}</textarea>
                  @if ($errors->has('deskripsi'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('deskripsi') }}</b></p>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="olahraga_siang">Tarif penggunaan untuk olahraga siang</label>
                  <input value="{{ $facility->olahraga_siang }}" class="form-control {{ $errors->has('olahraga_siang')?'is-invalid':'' }}" name="olahraga_siang" minlength="2" type="text">
                  @if ($errors->has('olahraga_siang'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('olahraga_siang') }}</b></p>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="olahraga_malam">Tarif Penggunaan untuk olahraga malam</label>
                  <input value="{{ $facility->olahraga_malam }}" class="form-control {{ $errors->has('olahraga_malam')?'is-invalid':'' }}" name="olahraga_malam" minlength="2" type="text">
                  @if ($errors->has('olahraga_siang'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('olahraga_siang') }}</b></p>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="dengan_karcis_sponsor">Tarif Penggunaan selain olahraga (Menarik Karcis dan Sponsor)</label>
                  <input value="{{ $facility->dengan_karcis_sponsor }}" class="form-control {{ $errors->has('dengan_karcis_sponsor')?'is-invalid':'' }}" name="dengan_karcis_sponsor" minlength="2" type="text">
                  @if ($errors->has('dengan_karcis_sponsor'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('dengan_karcis_sponsor') }}</b></p>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="dengan_sponsor">Tarif Penggunaan selain olahraga (Dengan Sponsor)</label>
                  <input value="{{ $facility->dengan_sponsor }}" class="form-control {{ $errors->has('dengan_sponsor')?'is-invalid':'' }}" name="dengan_sponsor" minlength="2" type="text">
                  @if ($errors->has('dengan_sponsor'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('dengan_sponsor') }}</b></p>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="tanpa_karcis_sponsor">Tarif Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)</label>
                  <input value="{{ $facility->tanpa_karcis_sponsor }}" class="form-control {{ $errors->has('tanpa_karcis_sponsor')?'is-invalid':'' }}" name="tanpa_karcis_sponsor" minlength="2" type="text">
                  @if ($errors->has('tanpa_karcis_sponsor'))
                      <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('tanpa_karcis_sponsor') }}</b></p>
                      </span>
                  @endif
                </div>
              <input class="btn btn-primary" type="submit" value="Update">
              <a href="{{ route('admin.fasilitas') }}" class="btn btn-outline-danger">Cancel</a>  
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection