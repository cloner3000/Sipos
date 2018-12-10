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
    <h4>Pengunjung Balita 0-12 Bulan</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="#" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Bulan</th>
            <th>Pengunjung Baru Laki-Laki</th>
            <th>Pengunjung Baru Perempuan</th>
            <th>Pengunjung Lama Laki-Laki</th>
            <th>Pengunjung Lama Perempuan</th>
          </tr>
        </thead>

        <tbody>
          <!-- Body Data -->
          <tr>
            <td>1</td>
            <td>Januari</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>

              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Februari</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>

              </div>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Maret</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>

              </div>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>April</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>

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
