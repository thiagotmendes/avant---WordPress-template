@extends('layouts.app')

@section('content')
  @include("components.home.component-banner")
  @include("components.home.component-sobre")
  @include("components.home.component-oportunidade")
  @include("components.home.component-depoimento")

{{--  @while(have_posts()) @php(the_post())--}}
{{--  @include('partials.page-header')--}}
{{--  @includeFirst(['partials.content-page', 'partials.content'])--}}
{{--  @endwhile--}}
@endsection
