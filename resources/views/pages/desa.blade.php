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

                <tbody>
                    <!-- Body Data -->
                    <tr>
                        <td>1</td>
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
                        <td>Sumberan</td>
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
                        <td>3</td>
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
<script>
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
                '<a href="/desa/'+data+'/delete"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete"><i class="ion-close"></i></button></a>' +
              '</div></td>';
          }
        }
      ]
    });
  });
</script>
@endsection
