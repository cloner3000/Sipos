@extends('layouts.base_dashboard')

@section('title')
Daftar Anak
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Daftar Anak</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ route('add.anak') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter" id="list-anak-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Anak</th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Berat Badan Lahir</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <!-- Body Data -->
      </table>
    </div>
  </div>

</div>
@endsection

@section('scripts')
@include('assets.js-datatable')
<script>
  $(document).ready(function (){
    $('#list-anak-table').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      dom : 'lf<"table-responsive"t>ip',
      ajax: '{{ route("ajax.list-anak", ["key" => Auth::user()->token_key]) }}',
      columns: [
        { data: 'no', name: 'no' },
        { data: 'nama_anak', name: 'nama_anak' },
        { data: 'ibu.nama', name: 'nama_ibu' },
        { data: 'ayah.nama', name: 'nama_ayah' },
        { data: 'tempat_lahir', name: 'tempat_lahir' },
        { data: 'tanggal_lahir', name: 'tanggal_lahir' },
        { data: 'berat_bayi_lahir', name: 'berat_bayi_lahir' },
        { data: 'agama.nama_agama', name: 'agama' },
        { data: 'status_hidup', name: 'status' },
        {
          data: 'id',
          render: function(data, type, row){
            return '<td class="text-center">' +
              '<div class="btn-group">' +
                '<a href="/pasangan/'+data+'/"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Detail"><i class="ion-ios-information-outline"></i></button></a>' +
                '<a href="/pasangan/'+data+'/edit"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button></a>' +
                '<a href="/pasangan/'+data+'/delete"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button></a>' +
              '</div></td>';
          }
        }
      ]
    });
  });
</script>
@endsection
