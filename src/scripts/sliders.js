import Swiper, { Pagination, Navigation, Autoplay } from "swiper";

jQuery(document).ready(function ($) {
  let heroSwiper = new Swiper(".hero-home ", {
    modules: [Pagination, Autoplay],
    slidesPerView: 1,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  if ($(window).width() > 768) {
    let latestNewsSwiper = new Swiper(".latest-news-slider ", {
      modules: [Navigation],
      slidesPerView: 3,
      loop: false,
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
  } else {
    if ($(".latest-news-slider").length) {
      if ($("#latest-news .swiper-wrapper .blog-card").length > 9) {
        $("#latest-news .swiper-wrapper .blog-card").slice(-7).remove();
      }
      if ($("#latest-videos .swiper-wrapper .video-card").length > 9) {
        $("#latest-videos .swiper-wrapper .video-card").slice(-7).remove();
      }
    }
  }

  let latestPhotosSwiper = new Swiper(".latest-photos-slider ", {
    slidesPerView: 1.2,
    loop: true,
    spaceBetween: 0,
    breakpoints: {
      // when window width is >= 768
      768: {
        slidesPerView: 2.5,
      },
    },
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
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    navigation: {
      nextEl: "#related-country-news .slider .swiper-button-next",
      prevEl: "#related-country-news .slider .swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 768
      768: {
        spaceBetween: 30,
        slidesPerView: 4,
      },
    },
  });
});
