@extends('layouts.base')


@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('js/plugins/slick/slick.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('js/plugins/slick/slick-theme.min.css') }}" />
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

<!-- Page JS Code -->
<script src="{{ asset('js/pages/index.js') }}"></script>
<script>
  $(function() {
    // Init page helpers (Slick Slider plugin)
    App.initHelpers('slick');
  });
</script>
@endsection
