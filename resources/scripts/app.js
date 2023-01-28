import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';

import Swiper, {Autoplay, Navigation, Pagination} from 'swiper';
// import 'swiper/css';
// import 'swiper/css/autoplay';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...

  const swiper = new Swiper('.depoimentos', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  })
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
