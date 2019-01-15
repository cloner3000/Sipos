@extends('layouts.base_dashboard')

@section('title')
Register WusPus
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Data WusPus</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ route('pages.add.wuspus') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Nama WusPus</th>
            <th>Umur</th>
            <th>Nama Suami</th>
            <th>Tahapan KS</th>
            <th>Kel. Dasa Wisma</th>
            <th>*Hidup</th>
            <th>*Meninggal</th>
            <th>Pengukuran LILA</th>
            <th>Imunisasi TT</th>
            <th>Jenis Kontrasepsi</th>
            <th>Ganti Kontrasepsi</th>
            <th>Tanggal Pergantian</th>
            <th>Kepemilikan Tabungan</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <!-- Body Data -->
          <tr>
            <td>1</td>
            <td>Nama WusPus</td>
            <td>Umur</td>
            <td>Nama Suami</td>
            <td>Tahapan KS</td>
            <td>Kel. Dasa Wisma</td>
            <td>*Hidup</td>
            <td>*Meninggal</td>
            <td>Pengukuran LILA</td>
            <td>Imunisasi TT</td>
            <td>Jenis Kontrasepsi</td>
            <td>Ganti Kontrasepsi</td>
            <td>Tanggal Pergantian</td>
            <td>Kepemilikan Tabungan</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit client"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove client"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Nama WusPus</td>
            <td>Umur</td>
            <td>Nama Suami</td>
            <td>Tahapan KS</td>
            <td>Kel. Dasa Wisma</td>
            <td>*Hidup</td>
            <td>*Meninggal</td>
            <td>Pengukuran LILA</td>
            <td>Imunisasi TT</td>
            <td>Jenis Kontrasepsi</td>
            <td>Ganti Kontrasepsi</td>
            <td>Tanggal Pergantian</td>
            <td>Kepemilikan Tabungan</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit client"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove client"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Nama WusPus</td>
            <td>Umur</td>
            <td>Nama Suami</td>
            <td>Tahapan KS</td>
            <td>Kel. Dasa Wisma</td>
            <td>*Hidup</td>
            <td>*Meninggal</td>
            <td>Pengukuran LILA</td>
            <td>Imunisasi TT</td>
            <td>Jenis Kontrasepsi</td>
            <td>Ganti Kontrasepsi</td>
            <td>Tanggal Pergantian</td>
            <td>Kepemilikan Tabungan</td>
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
