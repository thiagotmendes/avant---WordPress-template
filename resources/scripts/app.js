import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';

// import {Swiper}  from "swiper";
import { Swiper, Navigation, Pagination, Scrollbar, EffectCoverflow, Autoplay,Thumbs } from 'swiper';
Swiper.use([Navigation, Pagination, Scrollbar, EffectCoverflow, Autoplay, Thumbs]);
/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  // Slider para depoimentos
  const swiper = new Swiper('.depoimentos', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  })

  // Slider para galeria de imagens interno
  const swiperGaley = new Swiper(".galery_image_thumb", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  const swiperGaleyThumb = new Swiper(".galery_image", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiperGaley,
    },
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
