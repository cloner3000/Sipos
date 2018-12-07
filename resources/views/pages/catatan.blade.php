@extends('layouts.base_dashboard')

@section('title')
Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('content')
<div class="card">



  <div class="card-header">
    <h4>Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
    <button class="btn btn-app btn-block" type="button">Tambah</button>
  </div>

  <div class="card-block">
    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
      <thead>
        <tr>
          <th class="text-center"></th>
          <th>Nama Ibu</th>
          <th>Nama Bayi</th>
          <th>Tanggal Lahir</th>
          <th>Ibu*</th>
          <th>Bayi*</th>
          <th>Umur</th>
          <th>Penyebab</th>
        </tr>
      </thead>

      <tbody>
        <!-- Body Data -->
        <tr>
          <th>1</th>
          <th>Nama Ibu</th>
          <th>Nama Bayi</th>
          <th>Tanggal Lahir</th>
          <th>Ibu</th>
          <th>Bayi</th>
          <th>Umur</th>
          <th>Penyebab</th>
        </tr>

        <tr>
          <th>2</th>
          <th>Nama Ibu</th>
          <th>Nama Bayi</th>
          <th>Tanggal Lahir</th>
          <th>Ibu</th>
          <th>Bayi</th>
          <th>Umur</th>
          <th>Penyebab</th>
        </tr>

        <tr>
          <th>3</th>
          <th>Nama Ibu</th>
          <th>Nama Bayi</th>
          <th>Tanggal Lahir</th>
          <th>Ibu</th>
          <th>Bayi</th>
          <th>Umur</th>
          <th>Penyebab</th>
        </tr>
        <!-- End of Body Data -->
      </tbody>
    </table>
  </div>
</div>
@endsection


@section('scripts')

<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/pages/base_tables_datatables.js') }}"></script>
@endsection
