jQuery(document).ready(function ($) {
  $("a[href='nolink']").on("click", function (e) {
    e.preventDefault();
  });

  if ($(".try-to-hide").length) {
    // if($('.try-to-hide').hasClass)
    $(`.try-to-hide.${$(".checkCountry").val()}`).hide();
  }
});
