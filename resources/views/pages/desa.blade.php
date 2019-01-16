@extends('layouts.base_dashboard')

@section('title')
Daftar Desa
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Daftar Desa</h4>
        <button class="btn btn-app btn-block" type="button" onclick="location.href='{{ route('pages.add.desa') }}'" style="width: 100px; float:right;">Tambah</button>
    </div>

    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter" id="list-desa-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Desa</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <form class="" action="{{ route('crud.delete.desa', ['key' => Auth::user()->token_key]) }}" method="post" style="display: none;" id="delete-form">
      @csrf
      <input type="hidden" name="id" value="-1">
    </form>

</div>
@endsection

@section('scripts')
@include('assets.js-datatable')
<script>
  function deleteData(id){
    document.getElementsByName('id')[0].value = id;
    document.getElementById('delete-form').submit();
  }

  $(document).ready(function (){
    $('#list-desa-table').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      dom : 'lf<"table-responsive"t>ip',
      ajax: '{{ route("ajax.list-desa", ["key" => Auth::user()->token_key]) }}',
      columns: [
        { data: 'no', name: 'no' },
        { data: 'nama_desa', name: 'nama_desa' },
        { data: 'kecamatan.nama_kecamatan', name: 'nama_kecamatan' },
        { data: 'kecamatan.kabupaten.nama_kabupaten', name: 'nama_kabupaten' },
        {
          data: 'id',
          render: function(data, type, row){
            return '<td class="text-center">' +
              '<div class="btn-group">' +
                '<a href="/desa/'+data+'/edit"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button></a>' +
                '<button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete" onclick="deleteData('+data+')"><i class="ion-close"></i></button>' +
              '</div></td>';
          }
        }
      ]
    });
  });
</script>
@endsection
