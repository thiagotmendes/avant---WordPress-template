<div class="page-header">
  <h1 class="main-title main-title--32px">{!! $title !!}</h1>
</div>
<div class="main-section__configuration mb-4">
  @php
    echo (get_field('valor'))? '<div class="main-section__price"> R$'.get_field('valor').'<span>/ '.get_field('tipo_valor').'</span> </div>' : "";
  @endphp
  {{ the_field('endereco') }}
</div>
