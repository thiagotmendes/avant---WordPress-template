@extends('layouts.app')

@section('content')
  @include("components.home.component-banner")
  @include("components.home.component-sobre")
  @include("components.home.component-oportunidade")
  @include("components.home.component-depoimento")
  @include("components.home.component-procura")
@endsection
