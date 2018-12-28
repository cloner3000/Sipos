@extends('layouts.base_dashboard')

@section('title')
Register Bayi
@endsection

@section('stylesheets')
@include('assets.css-datatable')
<link rel="stylesheet" href="{{ asset('js/plugins/select2/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('js/plugins/select2/select2-bootstrap.css') }}" />
@endsection

@section('content')
    @include('includes.select-year')
    <h2 class="section-title">Data Register Bayi Umur 24 - 35 Bulan tahun {{ $tahun }}</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="card js-wizard-simple">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-justified">
                  @foreach ($bulan as $no => $val)
                    <li class="{{ $no == 1 ? 'active' : ''}}">
                        <a href="#simple-classic-step{{$no}}" data-toggle="tab">{{$val}}</a>
                    </li>
                  @endforeach

                </ul>
                <!-- End Step Tabs -->

                <!-- Form -->
                <form class="form-horizontal" action="base_forms_wizard.html" method="post">
                    <!-- Steps Content -->
                    <div class="card-block tab-content">

                        @foreach ($bulan as $no => $val)
                          <div class="tab-pane m-t-md m-b-lg {{ $no == 1 ? 'active' : ''}}" id="simple-classic-step{{$no}}">
                            <div class="card">
                              <div class="card-block">
                                <div class="table-responsive">
                                  <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Nama Anak</th>
                                        <th>Tanggal Lahir</th>
                                        <th>BBL</th>
                                        <th>Nama Ibu</th>
                                        <th>Status Penimbangan</th>
                                        {!! $no == 2 || $no == 8 ? '<th>Vit A</th>' : '' !!}
                                        <th>Imunisasi</th>
                                        <th>Catatan</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <!-- Body Data -->

                                      <!-- End of Body Data -->
                                    </tbody>
                                  </table>
                                </div>
                              </div>

                            </div>
                          </div>
                        @endforeach

                    </div>
                    <!-- End Steps Content -->
                </form>
                <!-- End Form -->
            </div>
            <!-- .card -->
            <!-- End Simple Classic Wizard -->
        </div>
    @endsection

    @section('scripts')
    @include('assets.js-datatable')
    <script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
    <script>
      $(function()
      {
          App.initHelpers(['select2']);
      });
    </script>
    @endsection
