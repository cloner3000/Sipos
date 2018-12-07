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
