@extends('layouts.base')

@section('body-class')
layout-has-drawer layout-has-fixed-header
@endsection

@section('side-menu')
  @include('includes.side-menu')
@endsection

@section('header')
  @include('includes.header')
@endsection
