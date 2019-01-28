@extends('layouts.base_dashboard')

@section('title')
Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas
@endsection

@section('stylesheets')
@include('assets.css-datatable')
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Catatan Ibu Hamil, Kelahiran, Kematian Bayi dan Kematian Bumil/Nifas</h4>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter " id="catatan-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
            <th>Nama Bayi</th>
            <th>Tanggal Lahir</th>
            <th>Tanggal Meninggal Bayi</th>
            <th>Umur Meninggal Bayi (hari)</th>
            <th>Penyebab Meninggal Bayi</th>
            <th>Tanggal Meninggal Ibu</th>
            <th>Umur Meninggal Ibu (tahun)</th>
            <th>Penyebab Meninggal Ibu</th>
            <th>Action</th>
          </tr>
        </thead>
        <!-- Table Body -->
      </table>
    </div>
  </div>

</div>
@endsection

@section('scripts')
@include('assets.js-datatable')
<script>
  $(document).ready(function (){
    $('#catatan-table').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      dom : 'lf<"table-responsive"t>ip',
      ajax: '{{ route("ajax.catatan") }}',
      columns: [
        { data: 'no', name: 'no' },
        { data: 'nama_ibu', name: 'nama_ibu' },
        { data: 'nama_ayah', name: 'nama_ayah' },
        { data: 'anak.nama_anak', name: 'anak.nama_anak' },
        { data: 'tanggal_lahir_anak', name: 'tanggal_lahir_anak' },
        { data: 'tanggal_meninggal_bayi', name: 'tanggal_meninggal_bayi' },
        { data: 'umur_meninggal_bayi', name: 'umur_meninggal_bayi' },
        { data: 'penyebab_meninggal_bayi', name: 'penyebab_meninggal_bayi' },
        { data: 'tanggal_meninggal_ibu', name: 'tanggal_meninggal_ibu' },
        { data: 'umur_meninggal_ibu', name: 'umur_meninggal_ibu' },
        { data: 'penyebab_meninggal_ibu', name: 'penyebab_meninggal_ibu' },
        {
          data: 'id',
          render: function(data, type, row){
            return '<td class="text-center">' +
              '<div class="btn-group">' +
                '<a href="/catatan/'+data+'/edit"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit client"><i class="ion-edit"></i></button></a>' +
              '</div></td>';
          }
        }
      ]
    });
  });
</script>
@endsection
