@extends('layouts.base_dashboard')

@section('title')
Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ url('/catatan/tambah') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
            <th>Nama Bayi</th>
            <th>Tanggal Lahir</th>
            <th>Ibu*</th>
            <th>Bayi*</th>
            <th>Umur</th>
            <th>Penyebab</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <!-- Body Data -->
          <tr>
            <td>1</td>
            <td>Nama Ibu</td>
            <td>Nama Ayah</td>
            <td>Nama Bayi</td>
            <td>Tanggal Lahir</td>
            <td>Ibu</td>
            <td>Bayi</td>
            <td>Umur</td>
            <td>Penyebab</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit client"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove client"><i class="ion-close"></i></button>
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
