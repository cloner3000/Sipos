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
        <h4>Edit Data Pasangan</h4>
    </div>

    <div class="card-block">
        <form class="form-horizontal m-t-sm" action="{{ route('crud.edit.pasangan', ['key' => Auth::user()->token_key]) }}" method="post">
          @csrf

          <input type="hidden" name="id_suami" value="{{ $data->ayah->id }}">
          <input type="hidden" name="id_istri" value="{{ $data->ibu->id }}">
          <input type="hidden" name="id_pasangan" value="{{ $data->id }}">

            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="nama_suami" placeholder="" required value="{{ $data->ayah->nama }}"/>
                            <label for="register2-username">Nama Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                          <input class="form-control" type="number" id="register2-username" name="nik_suami" placeholder="" required value="{{ $data->ayah->nik }}"/>
                            <label for="register2-username">NIK Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="tempat_lahir_suami" placeholder="" required value="{{ $data->ayah->tempat_lahir }}"/>
                            <label for="register2-username">Tempat Lahir Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_lahir_suami" data-date-format="dd/mm/yyyy" placeholder="" required value="{{ $data->ayah->tanggal_lahir }}">
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
                                <option value="{{$agama->id}}" {{ $data->ayah->id_agama == $agama->id ? 'selected' : ''}}>{{ $agama->nama_agama }}</option>
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
                                @foreach ($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}" {{ $data->ayah->id_pendidikan_terakhir == $pendidikan->id ? 'selected' : '' }}>{{ $pendidikan->nama_pendidikan }}</option>
                                @endforeach
                            </select>
                            <label for="example2-select2">Pendidikan Terakhir Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="pekerjaan_suami" placeholder="" required value="{{ $data->ayah->pekerjaan }}"/>
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
                            <input class="form-control" type="text" id="register2-username" name="nama_istri" placeholder="" required value="{{ $data->ibu->nama }}"/>
                            <label for="register2-username">Nama Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="number" id="register2-username" name="nik_istri" placeholder="" required value="{{ $data->ibu->nik }}"/>
                            <label for="register2-username">NIK Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="tempat_lahir_istri" placeholder="" required value="{{ $data->ibu->tempat_lahir }}"/>
                            <label for="register2-username">Tempat Lahir Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_lahir_istri" data-date-format="dd/mm/yyyy" placeholder="" required value="{{ $data->ibu->tanggal_lahir }}">
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
                                <option value="{{$agama->id}}" {{ $data->ibu->id_agama == $agama->id ? 'selected' : '' }}>{{ $agama->nama_agama }}</option>
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
                                @foreach ($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}" {{ $data->ibu->id_pendidikan_terakhir == $pendidikan->id ? 'selected' : '' }}>{{ $pendidikan->nama_pendidikan }}</option>
                                @endforeach
                            </select>
                            <label for="example2-select2">Pendidikan Terakhir Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="pekerjaan_istri" placeholder="" required value="{{ $data->ibu->pekerjaan }}"/>
                            <label for="register2-username">Pekerjaan Istri</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_menikah" data-date-format="dd/mm/yyyy" placeholder="" required value="{{ $data->tanggal_menikah }}">
                            <label for="example-datepicker4">Tanggal Menikah</label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="alamat_pasangan" placeholder="" required value="{{ $data->alamat }}"/>
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
                                <option value="{{$desa->id}}" {{ $data->id_desa == $desa->id ? 'selected' : ''}}>{{ $desa->nama_desa }}</option>
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
