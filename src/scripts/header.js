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
      $("#masthead .nav-bar form:not(.wpcf7-form)").toggleClass("active");
      $("#masthead .nav-bar").toggleClass("search-open");
      $(this).removeClass("disabled");
    }
  });
  $("#masthead .nav-bar form .search-close").on("click", function (e) {
    e.preventDefault();
    $("#masthead .nav-bar form:not(.wpcf7-form)").toggleClass("active");
    $("#masthead .nav-bar").toggleClass("search-open");
    $("#masthead .nav-bar form .search-btn").addClass("disabled");
  });
  $("#menu-trigger").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("active");
    $("#masthead .nav-bar ul").toggleClass("active");
  });
  if ($(window).width() < 769) {
    $("#masthead .nav-bar ul li.menu-item-has-children a").on(
      "click",
      function (e) {
        e.preventDefault();
        $(this)
          .parent()
          .find(".sub-menu")
          .append(
            "<a href='#' class='close-sub-menu'><i class='fas fa-long-arrow-alt-left'></i></a>"
          );
        $(this).parent().find(".sub-menu").css("display", "flex");
        $(".close-sub-menu").on("click", function (e) {
          e.preventDefault();
          $("#masthead .nav-bar ul li .sub-menu").css("display", "none");
        });
      }
    );
    $('#masthead .nav-bar ul li.menu-item-has-children .sub-menu li a').on('click', function (e) {
      window.location = this.href
    })
  }
  $('a.newsletter-trigger').on('click', function (e) {
    e.preventDefault();
    $('#newsletter-modal').toggleClass('active');
  })
  $('#newsletter-modal .close-modal-btn').on('click', function (e) {
    e.preventDefault()
    $('#newsletter-modal').removeClass('active');
  })
});
