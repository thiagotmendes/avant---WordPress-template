@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.breadcrumb')
    <section class="main-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            @include('partials.page-header')
            @includeFirst(['partials.content-page', 'partials.content'])
          </div>
          <div class="col-md-4">
            @include("forms.component-form-interesse")
          </div>
        </div>
      </div>
    </section>
  @endwhile
@endsection
