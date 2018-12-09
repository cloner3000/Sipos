@extends('layouts.base_dashboard')

@section('title')
Tambah Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Register Bayi</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ url('/register-wuspus/tambah') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Bulan</th>
            <th>Hasil Penimbangan</th>
            <th>Status</th>
            <th>Pemberian Asi</th>
            <th>Vit-A</th>
            <th>HB-0</th>
            <th>BCG</th>
            <th>DPT/HB I</th>
            <th>DPT/HB II</th>
            <th>DPT/HB III</th>
            <th>Polio I</th>
            <th>Polio II</th>
            <th>Polio III</th>
            <th>Polio IV</th>
            <th>Polio V</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <!-- Body Data -->

          <tr>
            <td>1</td>
            <td>Desember</td>
            <td>1.2</td>
            <td>Baru</td>
            <td>Ya</td>
            <td> - </td>
            <td>20-12-2018</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
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
            <td>1.9</td>
            <td>Naik</td>
            <td>Ya</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td>12-01-2019</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
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
            <td>Februari</td>
            <td>1.8</td>
            <td>Turun</td>
            <td>Ya</td>
            <td> - </td>
            <td> - </td>
            <td>03-01-2019</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
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
