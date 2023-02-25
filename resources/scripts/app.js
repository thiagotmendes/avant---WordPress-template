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
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
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

  const btnMobile = document.querySelector('.main-btn__mobile');
  const menuMobile = document.querySelector('.main-nav__mobile');

  if(btnMobile) {
    btnMobile.addEventListener('click', function (event) {
      if(this.classList.contains('main-btn__mobile--active')) {
        this.classList.remove('main-btn__mobile--active')
        menuMobile.classList.remove('main-nav__mobile--active')
      }
      else {
        this.classList.add('main-btn__mobile--active')
        menuMobile.classList.add('main-nav__mobile--active')
      }
      event.preventDefault()
    });
  }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
