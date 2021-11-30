import Swiper, { Pagination } from "swiper";

jQuery(document).ready(function ($) {
  let swiper = new Swiper(".hero-home ", {
    modules: [Pagination],
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });
});
