{{--
Template name: Cardápio
--}}

@extends('layouts.app')

@section('content')
  @include('blocks/banner-slider')
  @include('components/cardapio-menu')
  @include('components/cardapio')

@endsection
