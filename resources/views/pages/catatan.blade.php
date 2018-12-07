@extends('layouts.base_dashboard')

@section('title')
Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('content')
<div class="card">



    <div class="card-header">
        <h4>Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
        <button class="btn btn-app btn-block" data-toggle="modal" data-target="#modal-popin" type="button">Tambah</button>
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

    <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Ini Judul</h4>

                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>

                <div class="card-block">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@section('scripts')

<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/pages/base_tables_datatables.js') }}"></script>
@endsection
