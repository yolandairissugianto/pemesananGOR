@extends('admin.templates.default')

@section('content')
<div class="row grid-margin">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Tambah Acara</h4>
        <form class="cmxform" id="commentForm" method="get" action="#">
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
                        <input type="file" class="dropify" />
                      </div>
                    </div>
                  </div>
                </div>
            <div class="form-group">
              <label for="cname">Nama Acara</label>
              <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Deskripsi Acara</label>
              <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="cdate">Tanggal Pelaksanaan</label>
              
                <input class="form-control" placeholder="dd/mm/yyyy">
              
            </div>
            <input class="btn btn-outline-warning" type="update" value="Update">
            <input class="btn btn-outline-danger" type="destroy" value="Destroy">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection