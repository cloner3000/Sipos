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
    <form class="form-horizontal m-t-sm" action="{{route('crud.add.anak', ['key' => Auth::user()->token_key])}}" method="post">

      {{ csrf_field() }}

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="nama" placeholder="Masukkan nama anak..." />
            <label for="register2-username">Nama Anak</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="tempat_lahir" placeholder="Masukkan tempat lahir..." />
            <label for="register2-username">Tempat Lahir</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12">
          <div class="form-material">
            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_lahir" data-date-format="dd/mm/yyyy" placeholder="hari/bulan/tahun">
            <label for="example-datepicker4">Tanggal Lahir</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-12">Jenis Kelamin</label>
        <div class="col-md-12">
          <label class="css-input css-radio css-radio-success m-r-sm">
            <input type="radio" name="jenis_kelamin" value="Laki-Laki"> <span></span> Laki-Laki
          </label>
          <label class="css-input css-radio css-radio-success m-r-sm" >
            <input type="radio" name="jenis_kelamin" value="Perempuan"/> <span></span> Perempuan
          </label>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="number" name="berat_lahir" placeholder="Masukkan berat lahir..." step="0.1" min="0"/>
            <label for="register2-username">Berat Lahir (kg)</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="agama" style="width: 100%;" data-placeholder="pilih satu..">
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              @foreach($agamas as $agama)
                <option value="{{$agama->id}}">{{ $agama->nama_agama }}</option>
              @endforeach
            </select>
            <label for="example2-select2">Pilih Agama</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="example2-select2" name="pasangan" style="width: 100%;" data-placeholder="pilih satu..">
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              @foreach($pasangans as $pasangan)
                <option value="{{$pasangan->id}}">{{$pasangan->ortus[0]->nama}} - {{$pasangan->ortus[1]->nama}}</option>
              @endforeach
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
