@extends('layouts.base_dashboard')

@section('title')
Edit Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header">
    <h4>Edit Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="{{ route('crud.edit.catatan', compact('key')) }}" method="post">

      <input type="hidden" name="id" value="{{$data->id}}">
      {{csrf_field()}}

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-ibu" placeholder="Masukkan Nama Ibu..." value="{{ $data->ibu->nama }}" readonly/>
            <label for="register2-username">Nama Ibu</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-ayah" placeholder="Masukkan Nama Ayah..." value="{{ $data->ayah->nama }}" readonly/>
            <label for="register2-username">Nama Ayah</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama-bayi" placeholder="Masukkan Nama Bayi..." value="{{ $data->anak->nama_anak }}" readonly/>
            <label for="register2-username">Nama Bayi</label>
          </div>
        </div>
      </div>

      <!-- tanggal lahir bayi-->
      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="lahir-bayi" data-date-format="dd/mm/yyyy" placeholder="hari/bulan/tahun" value="{{ $data->anak->tanggal_lahir }}" readonly>
            <label for="example-datepicker4">Tanggal Lahir Bayi</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-12">Pilih satu untuk input tanggal meninggal</label>
        <div class="col-md-12">
          <label class="css-input css-radio css-radio-success m-r-sm">
            <input type="radio" name="meninggal" value="2" {{ $data->meninggal == 2 ? 'checked' : ''}}> <span></span> Ibu
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="meninggal" value="1" {{ $data->meninggal == 1 ? 'checked' : ''}}/> <span></span> Anak
          </label>
        </div>
      </div>

      <!-- tanggal mati -->
      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_meninggal" data-date-format="dd/mm/yyyy" placeholder="hari/bulan/tahun" value="{{ $data->tanggal_meninggal }}">
            <label for="example-datepicker4">Tanggal Kematian</label>
          </div>
        </div>
      </div>
      <!-- umur saat mati -->

      <!-- penyebab mati -->
      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="penyebab_meninggal" placeholder="Masukkan penyebab..." value="{{ $data->penyebab_meninggal }}"/>
            <label for="register2-username">Penyebab Kematian</label>
          </div>
        </div>
      </div>

      <div class="form-group m-b-0">
        <div class="col-xs-12">
          <!-- <input type="submit" name="submit" value="Simpan" class="btn btn-app"> -->
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