jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    var sticky = $("#masthead .top-bar"),
      scroll = $(window).scrollTop();

    if (scroll >= 100) {
      sticky.slideUp();
      $("#to-top").slideDown();
    } else {
      sticky.slideDown();
      $("#to-top").slideUp();
    }
  });

  $("#page").css("padding-top", $("#masthead").outerHeight());

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
});
