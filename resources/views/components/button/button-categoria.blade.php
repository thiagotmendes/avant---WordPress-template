<div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    {{ (isset(get_queried_object()->name))? get_queried_object()->name : "Categoria" }}
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    @php
      $terms = get_terms( 'categoria', array(
          'hide_empty' => false,
      ) );
    @endphp
    @foreach($terms as $term)
      <li><a class="dropdown-item" href="{{ get_term_link($term) }}"> {{ $term->name }} </a></li>
    @endforeach
  </ul>
</div>
