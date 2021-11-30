jQuery(document).ready(function ($) {
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
