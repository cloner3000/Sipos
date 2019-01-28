@extends('layouts.base_dashboard')

@section('title')
Edit Data Posyandu
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

  <div class="card-header bg-purple bg-inverse">
    <h4>Edit Data Posyandu</h4>
  </div>

  <div class="card-block">
    <form class="form-horizontal m-t-sm" action="{{ route('crud.edit.posyandu') }}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{ $posyandu->id }}">
      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="number" id="register2-username" name="no_posyandu" placeholder="Masukkan Nama Posyandu" value="{{ $posyandu->no_posyandu }}" required min="0"/>
            <label for="register2-username">Nomor Posyandu</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama_posyandu" placeholder="Masukkan Nama Posyandu" value="{{ $posyandu->nama_posyandu }}" required/>
            <label for="register2-username">Nama Posyandu</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="alamat_posyandu" placeholder="Masukkan Alamat" value="{{ $posyandu->alamat }}" required/>
            <label for="register2-username">Alamat Posyandu</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="desa" style="width: 100%;" data-placeholder="pilih satu.." required>
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              @foreach($desas as $desa)
              <option value="{{ $desa->id }}" {{ $posyandu->id_desa == $desa->id ? 'selected' : ''}}>{{ $desa->nama_desa }}</option>
              @endforeach
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
