@extends('layouts.base_dashboard')

@section('title')
Edit Data Desa
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header bg-purple bg-inverse">
    <h4>Edit Data NTOB</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="{{ route('crud.edit.ntob') }}" method="post">
      @csrf

      <input type="hidden" name="id" value="{{ $ntob->id }}">
      <input type="hidden" name="id_reg" value="{{ $ntob->id_register }}">

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" placeholder="Masukkan Nama Desa" value="{{ $ntob->registerBayi->anak->nama_anak }}" disabled/>
            <label for="register2-username">Nama Anak</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="number" id="register2-username" name="berat" placeholder="Berat" min="0" step="0.1" required value="{{ $ntob->berat }}"/>
            <label for="register2-username">Berat penimbangan (kg)</label>
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
