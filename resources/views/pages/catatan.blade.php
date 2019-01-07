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
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ url('/catatan/tambah') }}'" style="width: 100px; float:right;">Tambah</button>
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

        <!-- <tbody> -->
          <!-- Body Data -->
          <!-- <tr>
            <td>1</td>
            <td>Nama Ibu</td>
            <td>Nama Ayah</td>
            <td>Nama Bayi</td>
            <td>Tanggal Lahir</td>
            <td>Ibu</td>
            <td>Bayi</td>
            <td>Umur</td>
            <td>Penyebab</td>
            <td>Umur</td>
            <td>Penyebab</td>
            <td class="text-center">
              <div class="btn-group">
                <a href="#"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit client"><i class="ion-edit"></i></button></a>
                <a href="#"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove client"><i class="ion-close"></i></button></a>
              </div>
            </td>
          </tr> -->

          <!-- End of Body Data -->
        <!-- </tbody> -->
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
      ajax: 'http://localhost:8000/ajax/{{Auth::user()->token_key}}/hello',
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
                '<a href="#"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove client"><i class="ion-close"></i></button></a>' +
              '</div></td>';
          }
        }
      ]
    });
  });
</script>
@endsection
