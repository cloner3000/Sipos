@extends('layouts.base')


@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('js/plugins/slick/slick.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('js/plugins/slick/slick-theme.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('js/plugins/datatables/jquery.dataTables.min.css') }}" />
@endsection

@section('body-class')
layout-has-drawer layout-has-fixed-header
@endsection

@section('side-menu')
  @include('includes.side-menu')
@endsection

@section('header')
  @include('includes.header')
@endsection


@section('scripts')
<script src="{{ asset('js/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.resize.min.js') }}"></script>

<script src="{{ asset('js/pages/index.js') }}"></script>

<script src="{{ asset('js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('js/plugins/masked-inputs/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('js/plugins/dropzonejs/dropzone.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
<script>
  $(function() {
    // Init page helpers (Slick Slider plugin)
    App.initHelpers('slick');
  });
</script>

<script>
  $(function()
  {
      // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
      App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs']);
  });
</script>

@endsection
