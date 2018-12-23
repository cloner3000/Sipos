@extends('layouts.base_dashboard')

@section('title')
Tambah Data Anak
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header bg-purple bg-inverse">
    <h4>Tambah Data Anak Baru</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post" onsubmit="return false;">

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-anak" placeholder="Masukkan nama anak..." />
            <label for="register2-username">Nama Anak</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="tempat-lahir" placeholder="Masukkan tempat lahir..." />
            <label for="register2-username">Tempat Lahir</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="lahir-anak" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Tanggal Lahir</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="number" id="register2-username" name="berat-lahir" placeholder="Masukkan berat lahir..." />
            <label for="register2-username">Berat Lahir (kg)</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="agama" placeholder="Masukkan agama" />
            <label for="register2-username">Agama</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="pasangan" style="width: 100%;" data-placeholder="pilih satu..">
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              <option value="1">Suciati - Tejo</option>
              <option value="2">Isti - Bambang</option>
              <option value="3">Tika - Slamet</option>
            </select>
            <label for="example2-select2">Pilih Orangtua</label>
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
