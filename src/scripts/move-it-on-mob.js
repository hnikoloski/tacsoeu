jQuery(document).ready(function ($) {
  if ($("main.single-post-photo").length) {
    if ($(window).width() < 769) {
      $(".swiper-btns-wrapper").appendTo(".hero-inner-post");
    }
  }
});
