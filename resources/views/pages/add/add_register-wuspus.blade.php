@extends('layouts.base_dashboard')

@section('title')
Tambah Data Wus/Pus
@endsection

@section('stylesheets')
  @include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header bg-purple bg-inverse">
    <h4>Tambah Data WusPus</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post" onsubmit="return false;">

      <div class="form-group">
          <div class="col-xs-12">
              <div class="form-material">
                  <input class="form-control" type="text" id="register2-username" name="nama-wuspus" placeholder="Masukkan Nama..." />
                  <label for="register2-username">Nama Wus / Pus</label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-xs-12">
              <div class="form-material">
                  <input class="form-control" type="text" id="register2-username" name="umur" placeholder="Masukkan Umur..." />
                  <label for="register2-username">Umur</label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-xs-12">
              <div class="form-material">
                  <input class="form-control" type="text" id="register2-username" name="umur" placeholder="Masukkan Umur..." />
                  <label for="register2-username">Nama Suami</label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-xs-12">
              <div class="form-material">
                  <input class="form-control" type="text" id="register2-username" name="ks" placeholder="Masukkan tahapan ks..." />
                  <label for="register2-username">Tahapan KS</label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-xs-12">
              <div class="form-material">
                  <input class="form-control" type="text" id="register2-username" name="dasawisma" placeholder="Masukkan Dasa Wisma..." />
                  <label for="register2-username">Dasa Wisma</label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-xs-4">
              <div class="form-material">
                  <input class="form-control" type="number" id="register2-username" name="umur" placeholder="Jumlah Anak Hidup" />
                  <label for="register2-username">Anak Hidup</label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-xs-4">
              <div class="form-material">
                  <input class="form-control" type="number" id="register2-username" name="umur" placeholder="Jumlah Anak Meninggal" />
                  <label for="register2-username">Anak Meninggal</label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-xs-4">
              <div class="form-material">
                  <input class="form-control" type="number" id="register2-username" name="umur" placeholder="Masukkan Angka LILA" />
                  <label for="register2-username">Pengukuran LILA</label>
              </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-md-12">Jenis Kontrasepsi</label>
        <div class="col-md-12">
          <label class="css-input css-radio css-radio-success m-r-sm">
            <input type="radio" name="pilih-meninggal" value="ibu" /> <span></span> Kondom
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="anak" /> <span></span> Pil
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="anak" /> <span></span> Implant
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="anak" /> <span></span> MOP
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="anak" /> <span></span> MOW
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="anak" /> <span></span> IUD
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="pilih-meninggal" value="anak" /> <span></span> Suntik
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
