@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
          
  <div class="row grid-margin">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic form validation</h4>
          <form enctype="multipart/form-data" method="post" action="{{ route('admin.fasilitas.tambahdata') }}">
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
                          <input type="file" class="dropify" name="gambar" data-allowed-file-extensions="png jpeg jpg"
                                  data-max-file-size="2M" />
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="form-group">
                <label for="nama_fasilitas">Nama Fasilitas</label>
                <input class="form-control {{ $errors->has('nama_fasilitas')?'is-invalid':'' }}" value="{{ old('nama_fasilitas') }}" name="nama_fasilitas" minlength="2" type="text">
                @if ($errors->has('nama_fasilitas'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('nama_fasilitas') }}</b></p>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi Singkat</label>
                <textarea class="form-control {{ $errors->has('deskripsi')?'is-invalid':'' }}" value="{{ old('deskripsi') }}" name="deskripsi" rows="4"></textarea>
                @if ($errors->has('deskripsi'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('deskripsi') }}</b></p>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="olahraga_siang">Tarif penggunaan untuk olahraga siang</label>
                <input class="form-control {{ $errors->has('olahraga_siang')?'is-invalid':'' }}" value="{{ old('olahraga_siang') }}" placeholder="Isi dalam bentuk rupiah" name="olahraga_siang" minlength="2" type="text">
                @if ($errors->has('olahraga_siang'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('olahraga_siang') }}</b></p>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="olahraga_malam">Tarif Penggunaan untuk olahraga malam</label>
                <input class="form-control {{ $errors->has('olahraga_malam')?'is-invalid':'' }}" value="{{ old('olahraga_malam') }}" placeholder="Isi dalam bentuk rupiah" name="olahraga_malam" minlength="2" type="text">
                @if ($errors->has('olahraga_malam'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('olahraga_malam') }}</b></p>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="dengan_karcis_sponsor">Tarif Penggunaan selain olahraga (Menarik Karcis dan Sponsor)</label>
                <input class="form-control {{ $errors->has('dengan_karcis_sponsor')?'is-invalid':'' }}" value="{{ old('dengan_karcis_sponsor') }}" placeholder="Isi dalam bentuk rupiah" name="dengan_karcis_sponsor" minlength="2" type="text">
                @if ($errors->has('dengan_karcis_sponsor'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('dengan_karcis_sponsor') }}</b></p>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="dengan_sponsor">Tarif Penggunaan selain olahraga (Dengan Sponsor)</label>
                <input class="form-control {{ $errors->has('dengan_sponsor')?'is-invalid':'' }}" value="{{ old('dengan_sponsor') }}" placeholder="Isi dalam bentuk rupiah" name="dengan_sponsor" minlength="2" type="text">
                @if ($errors->has('dengan_sponsor'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('dengan_sponsor') }}</b></p>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="tanpa_karcis_sponsor">Tarif Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)</label>
                <input class="form-control {{ $errors->has('tanpa_karcis_sponsor')?'is-invalid':'' }}" value="{{ old('tanpa_karcis_sponsor') }}" placeholder="Isi dalam bentuk rupiah" name="tanpa_karcis_sponsor" minlength="2" type="text">
                @if ($errors->has('tanpa_karcis_sponsor'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('tanpa_karcis_sponsor') }}</b></p>
                  </span>
                @endif
              </div>
              <input class="btn btn-primary" type="submit" value="Submit">
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection