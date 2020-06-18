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
                          <input type="file" class="dropify" name="gambar" />
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="form-group">
                <label for="nama_fasilitas">Nama Fasilitas</label>
                <input id="nama_fasilitas" class="form-control" name="nama_fasilitas" minlength="2" type="text" required>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi Singkat</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="olahraga_siang">Tarif penggunaan untuk olahraga siang</label>
                <input id="olahraga_siang" class="form-control" placeholder="Isi dalam bentuk rupiah" name="olahraga_siang" minlength="2" type="text" required>
              </div>
              <div class="form-group">
                <label for="olahraga_malam">Tarif Penggunaan untuk olahraga malam</label>
                <input id="olahraga_malam" class="form-control" placeholder="Isi dalam bentuk rupiah" name="olahraga_malam" minlength="2" type="text" required>
              </div>
              <div class="form-group">
                <label for="dengan_karcis_sponsor">Tarif Penggunaan selain olahraga (Menarik Karcis dan Sponsor)</label>
                <input id="dengan_karcis_sponsor" class="form-control" placeholder="Isi dalam bentuk rupiah" name="dengan_karcis_sponsor" minlength="2" type="text" required>
              </div>
              <div class="form-group">
                <label for="dengan_sponsor">Tarif Penggunaan selain olahraga (Dengan Sponsor)</label>
                <input id="dengan_sponsor" class="form-control" placeholder="Isi dalam bentuk rupiah" name="dengan_sponsor" minlength="2" type="text" required>
              </div>
              <div class="form-group">
                <label for="tanpa_karcis_sponsor">Tarif Penggunaan selain olahraga (Tanpa Karcis dan Sponsor)</label>
                <input id="tanpa_karcis_sponsor" class="form-control" placeholder="Isi dalam bentuk rupiah" name="tanpa_karcis_sponsor" minlength="2" type="text" required>
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