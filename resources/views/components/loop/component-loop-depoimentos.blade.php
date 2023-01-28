<div class="d-flex depoimentos swiper">
  <div class="swiper-wrapper">
    @for($i = 0; $i < 10; $i++)
      @include("components.box.component-box-depoimento")
    @endfor
  </div>
</div>
