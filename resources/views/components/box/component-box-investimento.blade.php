<div class="main-box main-box__grid">
  <div class="main-box__image">
    <a href="{{ get_the_permalink() }}" class="">
      <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}" class="main-box__grid--image">
    </a>
  </div>
  @if(get_field('is_destaque'))
  <img src="{{ asset("images/destaque-tag.png") }}" alt="" class="main-box__image--destaque">
  @endif
  <div class="main-box__description">
    @if(get_field('valor'))
      <div class="main-box__price">
        R${{ get_field('valor') }} <span>/{{ get_field('tipo_valor') }}</span>
      </div>
    @endif
    <h4 class="main-title main-title--24px">
      {{ get_the_title() }}
    </h4>
    <p class="">
      {{ get_field('endereco') }}
    </p>
    <div class="main-box__bottom-click text-center">
      <img src="{{ asset("images/message-square.png") }}" alt="" class="">
      Tenho interesse
    </div>
  </div>
</div>
