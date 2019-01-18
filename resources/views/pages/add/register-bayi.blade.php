@extends('layouts.base_dashboard')

@section('title')
Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header bg-purple bg-inverse">
    <h4>Tambah Data Pantau Bayi</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post" onsubmit="return false;">

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="id_anak" style="width: 100%;" data-placeholder="Nama anak.." required>
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              @foreach($anaks as $anak)
              <option value="{{ $anak->id }}">{{ $anak->nama_anak }}</option>
              @endforeach
            </select>
            <label for="example2-select2">Nama Anak</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="bulan" style="width: 100%;" data-placeholder="Pilih bulan.." required>
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              @foreach($bulans as $bulan)
              <option value="{{ $bulan->id }}">{{ $bulan->nama_bulan }}</option>
              @endforeach
            </select>
            <label for="example2-select2">Bulan</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-6">
          Pemberian Vitamin <br>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" checked="" name="vitamin_a"><span></span> Vitamin A
          </label>
        </div>
      </div>

      <!-- end imunisasi campak -->
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
