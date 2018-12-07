@extends('layouts.base_dashboard')

@section('title')
Tambah Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
        <button class="btn btn-app btn-block" data-toggle="modal" data-target="#modal-popin" type="button" onclick="location.href='{{ url('/catatan/tambah') }}'">Tambah</button>
    </div>

    <div class="card-block">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Nama Ibu</th>
                    <th>Nama Bayi</th>
                    <th>Tanggal Lahir</th>
                    <th>Ibu*</th>
                    <th>Bayi*</th>
                    <th>Umur</th>
                    <th>Penyebab</th>
                </tr>
            </thead>

            <tbody>
                <!-- Body Data -->
                <tr>
                    <td>1</td>
                    <td>Nama Ibu</td>
                    <td>Nama Bayi</td>
                    <td>Tanggal Lahir</td>
                    <td>Ibu</td>
                    <td>Bayi</td>
                    <td>Umur</td>
                    <td>Penyebab</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Nama Ibu</td>
                    <td>Nama Bayi</td>
                    <td>Tanggal Lahir</td>
                    <td>Ibu</td>
                    <td>Bayi</td>
                    <td>Umur</td>
                    <td>Penyebab</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Nama Ibu</td>
                    <td>Nama Bayi</td>
                    <td>Tanggal Lahir</td>
                    <td>Ibu</td>
                    <td>Bayi</td>
                    <td>Umur</td>
                    <td>Penyebab</td>
                </tr>
                <!-- End of Body Data -->
            </tbody>
        </table>
    </div>

</div>
@endsection


@section('scripts')

<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/pages/base_tables_datatables.js') }}"></script>
@endsection
