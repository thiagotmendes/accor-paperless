import domReady from '@roots/sage/client/dom-ready';
// Import Bootstrap
import 'bootstrap';

import { Swiper, Navigation, Pagination, Scrollbar, EffectCoverflow, Autoplay,Thumbs } from 'swiper';
Swiper.use([Navigation, Pagination, Scrollbar, EffectCoverflow, Autoplay, Thumbs]);

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  // Slider para depoimentos
  const swiper = new Swiper('.main-banner__slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 600,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  })

  const swiperMenu = new Swiper('.swiper_menu', {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 10,
    speed: 600,
  })

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
