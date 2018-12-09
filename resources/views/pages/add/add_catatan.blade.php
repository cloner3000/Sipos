@extends('layouts.base_dashboard')

@section('title')
Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header">
    <h4>Tambah Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post" onsubmit="return false;">

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-ibu" placeholder="Masukkan Nama Ibu..." />
            <label for="register2-username">Nama Ibu</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-ayah" placeholder="Masukkan Nama Ayah..." />
            <label for="register2-username">Nama Ayah</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-bayi" placeholder="Masukkan Nama Bayi..." />
            <label for="register2-username">Nama Bayi</label>
          </div>
        </div>
      </div>

      <!-- tanggal lahir bayi-->
      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="lahir-bayi" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Tanggal Lahir Bayi</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-12">Pilih satu untuk input tanggal meninggal</label>
        <div class="col-md-12">
          <label class="radio-inline">
            <input type="radio" id="example-inline-radio1" name="pilih-meninggal" value="ibu" /> Ibu
          </label>
          <label class="radio-inline" >
            <input type="radio" id="example-inline-radio2" name="pilih-meninggal" value="anak" /> Anak
          </label>
        </div>
      </div>

      <!-- tanggal mati -->
      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="mati-ibu" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Tanggal Kematian</label>
          </div>
        </div>
      </div>
      <!-- umur saat mati -->

      <!-- penyebab mati -->
      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-bayi" placeholder="Masukkan penyebab..." />
            <label for="register2-username">Penyebab Kematian</label>
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
