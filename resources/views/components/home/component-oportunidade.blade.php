<section class="main-section pt-5 pb-5">
  <div class="container">
    <h4 class="main-title main-title--32px text-center mb-5">
      Oportunidades de investimento
    </h4>
    @include('components.navgations.component-category-navigation')

    <div class="mt-5 mb-5 d-flex justify-content-evenly">
      <div class="">
        <img src="{{ asset("images/map-pin.png") }}" alt="" class="">
        localização: <strong>Governador Valadares</strong>
      </div>
      <div class="">
        <img src="{{ asset("images/sliders.png") }}" alt="" class="">
        Ordenação: <strong>Destaques</strong>
      </div>
    </div>

    @include("components.loop.component-loop-investimento")
  </div>
</section>
