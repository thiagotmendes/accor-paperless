{{--
  Template Name: Home page
--}}

@extends('layouts.app')

@section('content')
  @include('blocks/banner-slider')
  @include('blocks/painel-home')
{{--@while(have_posts()) @php(the_post())--}}
{{--@include('partials.page-header')--}}
{{--@include('partials.content-page')--}}
{{--@endwhile--}}

@endsection
