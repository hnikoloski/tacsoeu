jQuery(document).ready(function ($) {
  $(".share-btn").on("click", function (e) {
    e.preventDefault();
    let sizeAttributes = "width=600,height=400";
    if ($(window).width() < 768) {
      sizeAttributes = "width=300,height=300";
    }
    if ($(this).hasClass("twitter")) {
      window.open(
        `https://twitter.com/intent/tweet?text=${
          encodeURIComponent($(this).attr("data-title")) + escape("\n")
        }&url=${location.href}`,
        "_blank",
        sizeAttributes
      );
    } else if ($(this).hasClass("facebook")) {
      window.open(
        `https://facebook.com/sharer.php?display=popup&u=${location.href}`,
        "_blank",
        sizeAttributes
      );
    } else if ($(this).hasClass("linkedin")) {
      window.open(
        `https://www.linkedin.com/sharing/share-offsite/?url=${location.href}`,
        "_blank",
        sizeAttributes
      );
    }
  });
});
