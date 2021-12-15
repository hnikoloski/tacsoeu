jQuery(document).ready(function ($) {
  $("#page").css("padding-top", $("#masthead").outerHeight());
  $(window).scroll(function () {
    var sticky = $("#masthead .top-bar"),
      scroll = $(window).scrollTop();

    if (scroll >= 100) {
      sticky.slideUp();
      if ($(window).width() > 768) {
        $("#to-top").slideDown();
      }
    } else {
      sticky.slideDown();
      if ($(window).width() > 768) {
        $("#to-top").slideUp();
      }
    }
  });

  $("#masthead .nav-bar form .search-btn").on("click", function (e) {
    if ($(this).hasClass("disabled")) {
      e.preventDefault();
      $("#masthead .nav-bar form").toggleClass("active");
      $("#masthead .nav-bar").toggleClass("search-open");
      $(this).removeClass("disabled");
    }
  });
  $("#masthead .nav-bar form .search-close").on("click", function (e) {
    e.preventDefault();
    $("#masthead .nav-bar form").toggleClass("active");
    $("#masthead .nav-bar").toggleClass("search-open");
    $("#masthead .nav-bar form .search-btn").addClass("disabled");
  });
  $("#menu-trigger").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("active");
    $("#masthead .nav-bar ul").toggleClass("active");
  });
});
