@extends('layouts.base_dashboard')

@section('title')
Tambah Data Pasangan
@endsection

@section('stylesheets')
@include('assets.css-form')
@endsection

@section('content')
<div class="card">

    <div class="card-header bg-purple bg-inverse">
        <h4>Tambah Data Pasangan</h4>
    </div>

    <div class="card-block">
        <form class="form-horizontal m-t-sm" action="{{ route('crud.add.pasangan', ['key' => Auth::user()->token_key]) }}" method="post">
          @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="nama_suami" placeholder="" required value="{{ old('nama_suami') }}"/>
                            <label for="register2-username">Nama Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="number" id="register2-username" name="nik_suami" placeholder="" required value="{{ old('nik_suami') }}" min="0"/>
                            <label for="register2-username">NIK Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="tempat_lahir_suami" placeholder="" required value="{{ old('tempat_lahir_suami') }}"/>
                            <label for="register2-username">Tempat Lahir Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_lahir_suami" data-date-format="dd/mm/yyyy" placeholder="" required value="{{ old('tanggal_lahir_suami') }}">
                            <label for="example-datepicker4">Tanggal Lahir Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="agama_suami" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                @foreach($agamas as $agama)
                                <option value="{{$agama->id}}" {{ old('agama_suami') == $agama->id ? 'selected' : '' }}>{{ $agama->nama_agama }}</option>
                                @endforeach
                            </select>
                            <label for="example2-select2">Agama Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="pendidikan_terakhir_suami" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                @foreach($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}" {{ old('pendidikan_terakhir_suami') == $pendidikan->id ? 'selected' : '' }}>{{ $pendidikan->nama_pendidikan }}</option>
                                @endforeach
                            </select>
                            <label for="example2-select2">Pendidikan Terakhir Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="pekerjaan_suami" placeholder="" required value="{{ old('pekerjaan_suami') }}"/>
                            <label for="register2-username">Pekerjaan Suami</label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Istri --}}

            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="nama_istri" placeholder="" required value="{{ old('nama_istri') }}"/>
                            <label for="register2-username">Nama Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="number" id="register2-username" name="nik_istri" placeholder="" required value="{{ old('nik_istri') }}" min="0"/>
                            <label for="register2-username">NIK Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="tempat_lahir_istri" placeholder="" required value="{{ old('tempat_lahir_istri') }}"/>
                            <label for="register2-username">Tempat Lahir Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_lahir_istri" data-date-format="dd/mm/yyyy" placeholder="" required value="{{ old('tanggal_lahir_istri') }}">
                            <label for="example-datepicker4">Tanggal Lahir Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="agama_istri" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                @foreach($agamas as $agama)
                                <option value="{{$agama->id}}" {{ old('agama_istri') == $agama->id ? 'selected' : '' }}>{{ $agama->nama_agama }}</option>
                                @endforeach
                            </select>
                            <label for="example2-select2">Agama Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="pendidikan_terakhir_istri" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                @foreach($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}" {{ old('pendidikan_terakhir_istri') == $pendidikan->id ? 'selected' : '' }}>{{ $pendidikan->nama_pendidikan }}</option>
                                @endforeach
                            </select>
                            <label for="example2-select2">Pendidikan Terakhir Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="pekerjaan_istri" placeholder="" required value="{{ old('pekerjaan_istri') }}"/>
                            <label for="register2-username">Pekerjaan Istri</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_menikah" data-date-format="dd/mm/yyyy" placeholder="" required value="{{ old('tanggal_menikah') }}">
                            <label for="example-datepicker4">Tanggal Menikah</label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="alamat_pasangan" placeholder="" required value="{{ old('alamat_pasangan') }}"/>
                            <label for="register2-username">Alamat Pasangan</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="desa_pasangan" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                @foreach($desas as $desa)
                                <option value="{{$desa->id}}" {{ old('desa_pasangan') == $desa->id ? 'selected' : '' }}>{{ $desa->nama_desa }}</option>
                                @endforeach
                            </select>
                            <label for="example2-select2">Desa</label>
                        </div>
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
