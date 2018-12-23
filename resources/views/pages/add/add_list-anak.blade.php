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
    <h4>Tambah Data Bayi</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post" onsubmit="return false;">

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="berat-bayi" placeholder="Masukkan Hasil Penimbangan..." />
            <label for="register2-username">Berat Bayi (kg)</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="berat-bayi" placeholder="Masukkan Hasil Penimbangan..." />
            <label for="register2-username">Berat Bayi (kg)</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-12">Status Penimbangan</label>
        <div class="col-md-12">
          <label class="css-input css-radio css-radio-success m-r-sm">
            <input type="radio" name="pilih-meninggal" value="N" /> <span></span> Naik
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="T" /> <span></span> Turun
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="O" /> <span></span> Tidak Datang
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="B" /> <span></span> Baru
          </label>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-12">Pemberian ASI</label>
        <div class="col-md-12">
          <label class="css-input css-radio css-radio-success m-r-sm">
            <input type="radio" name="pilih-meninggal" value="iya" /> <span></span> iya
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="tidak" /> <span></span> tidak
          </label>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="vit-a" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Pemberian Vit A</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="hb0-date" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Pemberian HB-0</label>
          </div>
        </div>
      </div>

      <!-- dpt hb imunisasi -->
      <div class="form-group">
        <label class="col-xs-12" for="example-select">Pilih Imunisasi DPT/HB</label>
        <div class="col-sm-9">
          <select class="form-control" id="example-select" name="dpt-jenis" size="1">
            <option value="0">Please select</option>
            <option value="dpt1">DPT/HB I</option>
            <option value="dpt2">DPT/HB II</option>
            <option value="dpt3">DPT/HB III</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="dpt-date" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Tanggal Imunisasi DPT/HB</label>
          </div>
        </div>
      </div>
      <!-- end dpt hb imunisasi -->

      <!-- polio imunisasi -->
      <div class="form-group">
        <label class="col-xs-12" for="example-select">Pilih Imunisasi DPT/HB</label>
        <div class="col-sm-9">
          <select class="form-control" id="example-select" name="polio-jenis" size="1">
            <option value="0">Please select</option>
            <option value="polio1">Polio I</option>
            <option value="polio2">Polio II</option>
            <option value="polio3">Polio III</option>
            <option value="polio3">Polio IV</option>
            <option value="polio3">Polio V</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="polio-date" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Tanggal Imunisasi Polio</label>
          </div>
        </div>
      </div>
      <!-- end polio imunisasi -->

      <!-- imunisasi campak-->
      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="campak-date" data-date-format="mm/dd/yyyy" placeholder="bulan/hari/tahun">
            <label for="example-datepicker4">Tanggal Imunisasi Campak</label>
          </div>
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
