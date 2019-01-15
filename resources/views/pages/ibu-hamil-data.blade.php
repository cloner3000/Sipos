@extends('layouts.base_dashboard')

@section('title')
Data Register Ibu Hamil
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Data Register Ibu Hamil</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ url('/register-wuspus/tambah') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">

    Nama Ibu : Ita <br>
    Nama Suami : Sitorus <br>
    Umur : 26 Tahun <br>
    Umur Kehamilan : 16 Minggu <br>
    <br>

    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Bulan</th>
            <th>Berat Badan</th>
            <th>Tensi</th>
            <th>Faktor Resiko</th>
            <th>Imunisasi TT</th>
            <th>Tablet FE</th>
            <th>Vit-A</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <!-- Body Data -->

          <tr>
            <td>1</td>
            <td>Januari</td>
            <td>2.1 Kg</td>
            <td>120/80</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Januari</td>
            <td>2.1 Kg</td>
            <td>120/80</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Januari</td>
            <td>2.1 Kg</td>
            <td>120/80</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>
          <!-- End of Body Data -->
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection

@section('scripts')
@include('assets.js-datatable')
@endsection
