jQuery(document).ready(function ($) {
  $("#masthead .nav-bar form button").on("click", function (e) {
    if ($(this).hasClass("disabled")) {
      e.preventDefault();
      $("#masthead .nav-bar form").toggleClass("active");
      $("#masthead .nav-bar").toggleClass("search-open");
      //   $(this).removeClass("disabled");
    }
  });
});
