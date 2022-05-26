jQuery(document).ready(function ($) {
  $("a[href='nolink']").on("click", function (e) {
    e.preventDefault();
  });

  if ($(".try-to-hide").length) {
    // if($('.try-to-hide').hasClass)
    $(`.try-to-hide.${$(".checkCountry").val()}`).hide();
  }
  $(".site-footer .site-info .footer-links-col ul li a, .site-footer .site-info .footer-quick-links-wrapper ul li a").addClass(
    "fancy-hover fancy-hover-lblue"
  );

  //Cookie Functions
  function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  function setCookie(key, value, expiry) {
    var expires = new Date();
    expires.setTime(expires.getTime() + expiry * 24 * 60 * 60 * 1000);
    document.cookie = key + "=" + value + ";expires=" + expires.toUTCString();
  }

  function getCookie(key) {
    var keyValue = document.cookie.match("(^|;) ?" + key + "=([^;]*)(;|$)");
    return keyValue ? keyValue[2] : null;
  }

  function eraseCookie(key) {
    var keyValue = getCookie(key);
    setCookie(key, keyValue, "-1");
  }
  // End Cookie Functions

  // Cookie notice
  if (getCookie("jaden-si-ili-ne-si") == "daj-edno-kolace") {
    $("#cookie-notice").remove();
  } else {
    $("body").append(
      '<div id="cookie-notice" class="animated fadeInLeft"> <p>Our Website uses cookies to improve your experience. Read more at our <a href="/privacy-policy">Privacy Policy</a>.</p> <div class="buttons-wrapper"> <a href="#!" class="accept">Accept</a> <a href="#!" class="decline">Decline</a></div> </div>'
    );
    $("#cookie-notice .accept").on("click", function (e) {
      e.preventDefault();
      setCookie("jaden-si-ili-ne-si", "daj-edno-kolace", 30);
      $("#cookie-notice").hide();
      setTimeout(function () {
        $("#cookie-notice").remove();
      }, 3000);
    });
    $("#cookie-notice .decline").on("click", function (e) {
      e.preventDefault();
      setCookie("jaden-si-ili-ne-si", "na-dieta-sum", 30);
      $("#cookie-notice").hide();
      setTimeout(function () {
        $("#cookie-notice").remove();
      }, 3000);
    });
  }
  // Cookie notice end

  // Truncate text
  $('.site-footer .site-info .footer-links-col ul li a').each(function (index, value) {
    let getLength = $(this).text().length
    if (getLength > 35) {
      $(this).text(
        $(this).text().substring(0, 25) + '...'
      )
    }
  });
});
