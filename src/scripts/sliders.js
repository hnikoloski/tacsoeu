import Swiper, { Pagination, Navigation } from "swiper";

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
    modules: [Navigation],
    slidesPerView: 3,
    loop: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".latest-news-slider .swiper-button-next",
      prevEl: ".latest-news-slider .swiper-button-prev",
    },
  });

  let latestVideosSwiper = new Swiper(".latest-videos-slider ", {
    slidesPerView: 3,
    loop: true,
    spaceBetween: 0,
  });
  let latestPhotosSwiper = new Swiper(".latest-photos-slider ", {
    slidesPerView: 2.5,
    loop: true,
    spaceBetween: 0,
  });

  let singlePhotoSlider = new Swiper(".single-photo-slider ", {
    modules: [Navigation],
    slidesPerView: "auto",
    centeredSlides: true,
    loop: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".single-photo-slider .swiper-button-next",
      prevEl: ".single-photo-slider .swiper-button-prev",
    },
  });
  let relatedCountrySwiper = new Swiper("#related-country-news .slider ", {
    modules: [Navigation],
    slidesPerView: 4,
    loop: true,
    spaceBetween: 30,
    navigation: {
      nextEl: "#related-country-news .slider .swiper-button-next",
      prevEl: "#related-country-news .slider .swiper-button-prev",
    },
  });
});
