const axios = require("axios");
jQuery(document).ready(function ($) {
  if ($(".card-type-video").length) {
    $(".card-type-video").on("click", function (e) {
      e.preventDefault();
      getVideoDetails($(this).attr("data-post-id"));
      $("body").addClass("overflow-hidden");
      $(this).on("keyup", function (e) {
        if (e.key == "Enter" || e.key == "Escape")
          $(".modal").removeClass("active");
        $(".modal-backdrop").remove();
        $("body").removeClass("overflow-hidden");
      });
    });

    function getVideoDetails(personId) {
      axios
        .get("/wp-json/wp/v2/video/" + personId + "?_embed")
        .then(function (response) {
          $("body").prepend('<div class="modal-backdrop"></div>');
          // handle success
          let videoLink = response.data.ACF.video_link;
          const videoWrapper = $(".modal-video .video-wrapper");
          videoWrapper.html(videoLink);
        })
        .catch(function (error) {
          console.log(error);
        })
        .then(function () {
          $(".modal-video").addClass("active");
        })
        .then(() => {
          $(".modal .close-modal, .modal-backdrop").on("click", function (e) {
            e.preventDefault();
            $(".modal").removeClass("active");
            $(".modal-backdrop").remove();
            $("body").removeClass("overflow-hidden");
          });
        });
    }
  }
});
