<div class="oportunidades-grid">
  <?php
    $argsInvestimento = [
      'post_type' => 'investimento',

    ];

    if(isset(get_queried_object()->term_id) && !empty(get_queried_object()->term_id)) {
      $argsInvestimento['tax_query'] =  array(
        array(
          'taxonomy' => get_queried_object()->taxonomy,
          'field'    => 'slug',
          'terms'    => array(get_queried_object()->slug),
          'include_children' => true,
          'operator' => 'IN'
        )
      );
    }
    $investimentoLoop = new WP_Query($argsInvestimento);
  ?>

  @if($investimentoLoop->have_posts())
    @while($investimentoLoop->have_posts()) @php($investimentoLoop->the_post())
      @include("components.box.component-box-investimento")
    @endwhile
  @endif
</div>

<div class="d-flex align-items-center justify-content-center pt-5">
  <a href="" class="main-button main-button--orange"> Veja todas oportunidades </a>
</div>
