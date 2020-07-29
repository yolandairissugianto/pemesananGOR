@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
          
  <div class="row grid-margin">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Detail Fasilitas</h4>
          <form enctype="multipart/form-data">
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
                                type="file" class="dropify" name="gambar" disabled />
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <label for="nama_fasilitas">Nama Fasilitas</label>
                  <input value="{{ $facility->nama_fasilitas }}" class="form-control" name="nama_fasilitas" minlength="2" type="text">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Singkat</label>
                  <textarea style="background-color: #2b2e4c" disabled class="form-control" name="deskripsi" rows="4">{{ $facility->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                  <label for="olahraga_siang">Tarif penggunaan untuk olahraga siang</label>
                  <input style="background-color: #2b2e4c" disabled value="Rp. {{ number_format($facility->olahraga_siang) }}" class="form-control" name="olahraga_siang" minlength="2" type="text">
                </div>
                <div class="form-group">
                  <label for="olahraga_malam">Tarif Penggunaan untuk olahraga malam</label>
                  <input style="background-color: #2b2e4c" disabled value="Rp. {{ number_format($facility->olahraga_malam) }}" class="form-control" name="olahraga_malam" minlength="2" type="text">
                </div>
                <div class="form-group">
                  <label for="dengan_karcis_sponsor">Tarif Penggunaan selain olahraga (Menarik Karcis dan Sponsor)</label>
                  <input style="background-color: #2b2e4c" disabled value="Rp. {{ number_format($facility->dengan_karcis_sponsor) }}" class="form-control" name="dengan_karcis_sponsor" minlength="2" type="text">
                </div>
                <div class="form-group">
                  <label for="dengan_sponsor">Tarif Penggunaan selain olahraga (Dengan Sponsor)</label>
                  <input style="background-color: #2b2e4c" disabled value="Rp. {{ number_format($facility->dengan_sponsor) }}" class="form-control" name="dengan_sponsor" minlength="2" type="text">
                </div>
                <div class="form-group">
                  <label for="tanpa_karcis_sponsor">Tarif Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)</label>
                  <input style="background-color: #2b2e4c" disabled value="Rp. {{ number_format($facility->tanpa_karcis_sponsor) }}" class="form-control" name="tanpa_karcis_sponsor" minlength="2" type="text">
                </div>
              <a href="{{ route('admin.fasilitas') }}" class="btn btn-outline-danger">Cancel</a>  
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection