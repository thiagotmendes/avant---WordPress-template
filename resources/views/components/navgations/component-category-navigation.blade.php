<div class="d-none d-md-flex">
  <a href="" class="main-button main-button--orange main-button--big-rounded">
    Todas as categorias
  </a>
  @php
    $terms = get_terms( 'categoria', array(
      'hide_empty' => false,
    ) );
  @endphp
  @foreach($terms as $category)
    <a href="{{ get_term_link($category) }}" class="main-button main-button--white mr-2 main-button--big-rounded margin-left">
      {{ $category->name }}
    </a>
  @endforeach
</div>
<div class="mt-5 mb-5 d-none d-md-flex justify-content-evenly">
  <div class="d-flex align-items-center">
    @include("components.button.button-localizacao")
  </div>
  <div class="d-flex align-items-center">
    @include("components.button.button-ordernacao")
  </div>
</div>
