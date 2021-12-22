jQuery(document).ready(function ($) {
  if ($(".js-filter").length) {
    $(".js-filter li a").on("click", function (e) {
      e.preventDefault();
      if ($('.res-filter').length) {
        $('.res-filter').remove();
      }
      $("#regions .top-bar").append(
        '<div class="res-filter"><a href="#">Reset <i class="fas fa-times"></i></a></div>'
      );
      handleReset();
      $(".js-filter li a").removeClass("active");
      $(this).addClass("active");
      let selectedFilter = $(this).attr("href");

      $(".js-filter-results .filter-single-result").hide();
      $(
        `.js-filter-results .filter-single-result .filterableVals.${selectedFilter}`
      )
        .parent()
        .parent()
        .fadeIn();
    });
  }
  function handleReset() {
    $(".res-filter a").on("click", function (e) {
      e.preventDefault();
      $(".res-filter").remove();
      $(".js-filter li a").removeClass("active");
      $(".js-filter-results .filter-single-result").show();
    });
  }
});
