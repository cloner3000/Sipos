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
    <h4>Daftar Posyandu</h4>
    <button class="btn btn-app btn-block"  type="button" onclick="location.href='{{ route('pages.add.posyandu') }}'" style="width: 100px; float:right;">Tambah</button>
  </div>

  <div class="card-block">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Posyandu</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <!-- Body Data -->
          <tr>
            <td>1</td>
            <td>Posyandu Mulia</td>
            <td>Ambulu</td>
            <td>Ambulu</td>
            <td>Jember</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Detail"><i class="ion-ios-information-outline" onclick="location.href='{{ url('/register-ibu-hamil/data/1') }}'"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Posyandu Sejahtera</td>
            <td>Umbulsari</td>
            <td>Mumbulsari</td>
            <td>Jember</td>
            <td class="text-center">
              <div class="btn-group">
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Detail"><i class="ion-ios-information-outline" onclick="location.href='{{ url('/register-ibu-hamil/data/1') }}'"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit"><i class="ion-edit"></i></button>
                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button>
              </div>
            </td>
          </tr>


          <!-- End of Body Data -->
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection

@section('scripts')
@include('assets.js-datatable')
<!-- <script>
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
</script> -->
@endsection
