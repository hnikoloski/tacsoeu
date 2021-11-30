import Swiper, { Pagination } from "swiper";

jQuery(document).ready(function ($) {
  let heroSwiper = new Swiper(".hero-home ", {
    modules: [Pagination],
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  let latestNewsSwiper = new Swiper(".latest-news-slider ", {
    modules: [Pagination],
    slidesPerView: 3,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});
