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
        <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post">

            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="nama_suami" placeholder="" required />
                            <label for="register2-username">Nama Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="number" id="register2-username" name="nik_suami" placeholder="" required />
                            <label for="register2-username">NIK Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_lahir_suami" data-date-format="dd/mm/yyyy" placeholder="" required>
                            <label for="example-datepicker4">Tanggal Lahir Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="agama_suami" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                {{-- @foreach($agamas as $agama)
                            <option value="{{$agama->id}}">{{ $agama->nama_agama }}</option>
                                @endforeach --}}
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
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Perguruan Tinggi D1">Perguruan Tinggi D1</option>
                                <option value="Perguruan Tinggi D2">Perguruan Tinggi D2</option>
                                <option value="Perguruan Tinggi D3">Perguruan Tinggi D3</option>
                                <option value="Perguruan Tinggi D4/S1">Perguruan Tinggi D4/S1</option>
                                <option value="Perguruan Tinggi S2">Perguruan Tinggi S2</option>
                                <option value="Perguruan Tinggi S3">Perguruan Tinggi S3</option>
                            </select>
                            <label for="example2-select2">Pendidikan Terakhir Suami</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="pekerjaan_suami" placeholder="" required />
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
                            <input class="form-control" type="text" id="register2-username" name="nama_istri" placeholder="" required />
                            <label for="register2-username">Nama Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="number" id="register2-username" name="nik_istri" placeholder="" required />
                            <label for="register2-username">NIK Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_lahir_istri" data-date-format="dd/mm/yyyy" placeholder="" required>
                            <label for="example-datepicker4">Tanggal Lahir Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="agama_istri" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                {{-- @foreach($agamas as $agama)
                            <option value="{{$agama->id}}">{{ $agama->nama_agama }}</option>
                                @endforeach --}}
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
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Perguruan Tinggi D1">Perguruan Tinggi D1</option>
                                <option value="Perguruan Tinggi D2">Perguruan Tinggi D2</option>
                                <option value="Perguruan Tinggi D3">Perguruan Tinggi D3</option>
                                <option value="Perguruan Tinggi D4/S1">Perguruan Tinggi D4/S1</option>
                                <option value="Perguruan Tinggi S2">Perguruan Tinggi S2</option>
                                <option value="Perguruan Tinggi S3">Perguruan Tinggi S3</option>
                            </select>
                            <label for="example2-select2">Pendidikan Terakhir Istri</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="pekerjaan_istri" placeholder="" required />
                            <label for="register2-username">Pekerjaan Istri</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="tanggal_menikah" data-date-format="dd/mm/yyyy" placeholder="" required>
                            <label for="example-datepicker4">Tanggal Menikah</label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register2-username" name="alamat_pasangan" placeholder="" required />
                            <label for="register2-username">Alamat Pasangan</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material">
                            <select class="js-select2 form-control" id="example2-select2" name="desa_pasangan" style="width: 100%;" data-placeholder="" required>
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                {{-- @foreach($agamas as $agama)
                          <option value="{{$agama->id}}">{{ $agama->nama_agama }}</option>
                                @endforeach --}}
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
