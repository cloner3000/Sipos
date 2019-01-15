@extends('layouts.base_dashboard')

@section('title')
Daftar Pasangan
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Daftar Pasangan</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ route('pages.add.pasangan') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter" id="list-pasangan-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Suami</th>
            <th>Nama Istri</th>
            <th>Tanggal Menikah</th>
            <th>Alamat</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Jumlah Anak</th>
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
    $('#list-pasangan-table').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      dom : 'lf<"table-responsive"t>ip',
      ajax: '{{ route("ajax.list-pasangan", ["key" => Auth::user()->token_key]) }}',
      columns: [
        { data: 'no', name: 'no' },
        { data: 'ayah.nama', name: 'nama_ayah' },
        { data: 'ibu.nama', name: 'nama_ibu' },
        { data: 'tanggal_menikah', name: 'tanggal_menikah' },
        { data: 'alamat', name: 'alamat' },
        { data: 'desa.nama_desa', name: 'nama_desa' },
        { data: 'desa.kecamatan.nama_kecamatan', name: 'nama_kecamatan' },
        { data: 'jumlah_anak', name: 'jumlah_anak' },
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
