@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
    
  <div class="card">
    <div>
      <div class="card-body">
        <h4 class="card-title">Data Acara</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table"> 
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Gambar</th>
                      <th>Nama Acara</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Pelaksanaan</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo"/></td>
                        <td>Acara 1</td>
                        <td>Acara yang akan diadakan secara umum</td>
                        <td>20 Juni 2020</td>
                        <td>
                            <button class="btn btn-outline-info">Info</button>
                            <button class="btn btn-outline-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo"/></td>
                        <td>Acara 2</td>
                        <td>Acara yang akan diadakan secara umum</td>
                        <td>20 Juni 2020</td>
                        <td>
                          <button class="btn btn-outline-info">Info</button>
                        <button class="btn btn-outline-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo"/></td>
                        <td>Acara 3</td>
                        <td>Acara yang akan diadakan secara umum</td>
                        <td>20 Juni 2020</td>
                        <td>
                          <button class="btn btn-outline-info">Info</button>
                          <button class="btn btn-outline-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection