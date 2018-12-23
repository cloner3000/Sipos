@extends('layouts.base_dashboard')

@section('title')
Daftar Anak
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Daftar Anak</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ route('add.posyandu') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Posyandu</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <!-- Body Data -->
          <tr>
            <td>1</td>
            <td>Ahok</td>
            <td>19-09-2013</td>
            <td>1.8 Kg</td>
            <td>Ibunya Ahok</td>
            <td>Ayahnya Ahok</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Detail"><i class="ion-ios-information-outline" onclick="location.href='{{ url('/register-ibu-hamil/data/1') }}'"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Ahok</td>
            <td>19-09-2013</td>
            <td>1.8 Kg</td>
            <td>Ibunya Ahok</td>
            <td>Ayahnya Ahok</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Detail"><i class="ion-ios-information-outline" onclick="location.href='{{ url('/register-ibu-hamil/data/1') }}'"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Ahok</td>
            <td>19-09-2013</td>
            <td>1.8 Kg</td>
            <td>Ibunya Ahok</td>
            <td>Ayahnya Ahok</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Detail"><i class="ion-ios-information-outline" onclick="location.href='{{ url('/register-ibu-hamil/data/1') }}'"></i></button>
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
