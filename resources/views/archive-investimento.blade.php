@extends('layouts.app')

@section('content')
  @include('partials.breadcrumb')
  <section class="main-section">
    <div class="container">
      @include('components.navgations.component-category-navigation')
      @include('components.loop.component-loop-investimento')
    </div>
  </section>
@endsection
