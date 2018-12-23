@extends('layouts.base_dashboard')

@section('title')
Tambah Data Pasangan
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header bg-purple bg-inverse">
    <h4>Tambah Data Pasangan</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post" onsubmit="return false;">

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-suami" placeholder="Masukkan nama suami" />
            <label for="register2-username">Nama Suami</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-istri" placeholder="Masukkan nama istri" />
            <label for="register2-username">Nama Istri</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="alamat-pasangan" placeholder="Masukkan Alamat" />
            <label for="register2-username">Alamat Pasangan</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="kecamatan" style="width: 100%;" data-placeholder="pilih satu..">
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              <option value="1">Sumbersari</option>
              <option value="2">Balung</option>
              <option value="3">Ambulu</option>
            </select>
            <label for="example2-select2">Pilih Kecamatan</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="Desa" style="width: 100%;" data-placeholder="pilih satu..">
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              <option value="1">Desa Kedungkandang</option>
              <option value="2">Desa Balung Timur</option>
              <option value="3">Desa Umbulsari</option>
            </select>
            <label for="example2-select2">Pilih Desa</label>
          </div>
        </div>
      </div>

      <div class="form-group m-b-0">
        <div class="col-xs-12">
          <button class="btn btn-app" type="submit">Simpan</button>
        </div>
      </div>

    </form>
  </div>

</div>
@endsection

@section('scripts')
@include('assets.js-form')
@endsection
