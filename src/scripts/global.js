jQuery(document).ready(function ($) {
  $("a[href='nolink']").on("click", function (e) {
    e.preventDefault();
  });

  if ($(".try-to-hide").length) {
    // if($('.try-to-hide').hasClass)
    $(`.try-to-hide.${$(".checkCountry").val()}`).hide();
  }
  $(".site-footer .site-info .footer-links-col ul li a").addClass(
    "fancy-hover fancy-hover-lblue"
  );
});
