@extends('layouts.base_dashboard')

@section('title')
Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('content')
<div class="card">

    <div class="card-header">
        <h4>Tambah Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
    </div>

    <div class="card-block">
        {{-- Form DISINI --}}
    </div>

</div>
@endsection


@section('scripts')

<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/pages/base_tables_datatables.js') }}"></script>
@endsection
