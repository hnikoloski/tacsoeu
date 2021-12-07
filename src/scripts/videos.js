const axios = require("axios");
jQuery(document).ready(function ($) {
  if ($(".card-type-video").length) {
    $(".card-type-video").on("click", function (e) {
      e.preventDefault();
      getVideoDetails($(this).attr("data-post-id"));
      $(this).on("keyup", function (e) {
        if (e.key == "Enter" || e.key == "Escape")
          $(".modal").removeClass("active");
      });
    });

    function getVideoDetails(personId) {
      axios
        .get("/wp-json/wp/v2/video/" + personId + "?_embed")
        .then(function (response) {
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
        });
    }
    $(".modal .close-modal, .modal:not(.modal-content)").on(
      "click",
      function (e) {
        e.preventDefault();
        $(".modal").removeClass("active");
      }
    );
  }
});
