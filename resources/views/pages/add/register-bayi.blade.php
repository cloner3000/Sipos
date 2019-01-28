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
    <form class="form-horizontal m-t-sm" action="{{ route('crud.add.register-bayi') }}" method="post">
      @csrf
      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="option-anak" name="id_anak" style="width: 100%;" data-placeholder="Nama anak.." required>
              <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
              @foreach($anaks as $anak)
              <option value="{{ $anak->id }}">{{ $anak->nama_anak }}</option>
              @endforeach
            </select>
            <label for="option-anak">Nama Anak</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="number" placeholder="" name="umur" id="umur-anak-form" min="0" readonly/>
            <label for="register2-username1">Umur anak (tahun)</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <select class="js-select2 form-control" id="option-bulan" name="bulan" required>

            </select>
            <label for="example2-select2">Bulan penimbangan</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="number" id="register2-username" name="berat" placeholder="Berat" min="0" step="0.1" required/>
            <label for="register2-username">Berat penimbangan (kg)</label>
          </div>
        </div>
      </div>

      <div class="form-group">
          <label class="col-md-12">Pemberian Asi</label>
        <div class="col-md-12">
          <label class="css-input css-checkbox css-checkbox-success asi-box">
            <input type="checkbox" name="e0"><span></span> E0
          </label>
          <label class="css-input css-checkbox css-checkbox-success asi-box">
            <input type="checkbox" name="e1"><span></span> E1
          </label>
          <label class="css-input css-checkbox css-checkbox-success asi-box">
            <input type="checkbox" name="e2"><span></span> E2
          </label>
          <label class="css-input css-checkbox css-checkbox-success asi-box">
            <input type="checkbox" name="e3"><span></span> E3
          </label>
          <label class="css-input css-checkbox css-checkbox-success asi-box">
            <input type="checkbox" name="e4"><span></span> E4
          </label>
          <label class="css-input css-checkbox css-checkbox-success asi-box">
            <input type="checkbox" name="e5"><span></span> E5
          </label>
          <label class="css-input css-checkbox css-checkbox-success asi-box">
            <input type="checkbox" name="e6"><span></span> E6
          </label>
        </div>
      </div>

      <div class="form-group" id="vitamin-a-form" hidden>
        <div class="col-xs-12">
          Pemberian Vitamin <br>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="vitamin_a"><span></span> Vitamin A
          </label>
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12" id="imunisasi-form">
          Pemberian Imunisasi <br>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="hb0"><span></span> HB O
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="bcg"><span></span> BCG
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="dpt_hb_1"><span></span> DPT/HB 1
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="dpt_hb_2"><span></span> DPT/HB 2
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="dpt_hb_3"><span></span> DPT/HB 3
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="polio_1"><span></span> Polio 1
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="polio_2"><span></span> Polio 2
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="polio_3"><span></span> Polio 3
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="polio_4"><span></span> Polio 4
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="campak_011"><span></span> Campak
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="dpt_hb_hib_1223"><span></span> DPT/HB/HIB
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="campak_1223"><span></span> Campak
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="dpt_hb_hib_2435"><span></span> DPT/HB/HIB
          </label>
          <label class="css-input css-checkbox css-checkbox-success">
            <input type="checkbox" name="campak_2435"><span></span> Campak
          </label>
        </div>
      </div>
      <br>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="form-material">
            <input class="form-control" type="text" id="register2-username" name="catatan" placeholder="Catatan"/>
            <label for="register2-username">Catatan</label>
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
<script>
  var bulans = {!! json_encode($bulans) !!};
</script>
@include('assets.js-form')
<script src="{{ asset('js/register-bayi.js') }}" charset="utf-8"></script>
@endsection
