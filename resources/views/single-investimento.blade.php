@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <section class="breadcrumbs">
      <div class="container">
        Você está aqui:
        Home
        Oportunidades
        Apartamento
      </div>
    </section>
    <section class="main-section">
      <div class="container">
        <dvi class="row">
          <div class="col-md-8">
            @include('partials.page-header')
            @includeFirst(['partials.content-page', 'partials.content'])
          </div>
        </dvi>
        <div class="col-md-3 offset-1">

        </div>
      </div>
    </section>

  @endwhile
@endsection
