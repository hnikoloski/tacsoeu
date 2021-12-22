const axios = require("axios");
jQuery(document).ready(function ($) {
  if ($(".person-tabber-header").length) {
    $(".person-tabber-header li a").on("click", function (e) {
      e.preventDefault();
      $(".person-tabber-header li a").removeClass("active");
      $(this).addClass("active");
      let selectedTab = $(this).attr("href");
      $(".tab").hide();
      $(selectedTab).fadeIn(300);
      $(selectedTab).css("display", "flex");
    });
    $(".single-person a").on("click", function (e) {
      e.preventDefault();

      $(this).on("keyup", function (e) {
        if (e.key == "Enter" || e.key == "Escape")
          $(".modal-person").removeClass("active");
        $(".modal-backdrop").remove();
      });
      let presonId = $(this).attr("href");
      getPersonDetails(presonId);
    });

    function getPersonDetails(personId) {
      axios
        .get("/wp-json/wp/v2/people/" + personId + "?_embed")
        .then(function (response) {
          $("body").prepend('<div class="modal-backdrop"></div>');
          // handle success
          let person = response.data;
          const basicInfo = `
          <div class="img-wrapper">
              <img src="${person._embedded["wp:featuredmedia"][0].source_url}" alt="${person.title.rendered}" class="full-size-img full-size-img-cover">
          </div>
          <h3>${person.title.rendered}</h3>
          <p>${person.ACF.person_position}</p>
    `;
          const personBio = person.ACF.person_bio;
          $(".bio-wrapper").html(personBio);
          $(".modal-content .single-person").html(basicInfo);
        })
        .catch(function (error) {
          console.log(error);
        })
        .then(function () {
          $(".modal-person").addClass("active");
        })
        .then(() => {
          $(".modal .close-modal, .modal-backdrop").on("click", function (e) {
            e.preventDefault();
            $(".modal").removeClass("active");
            $(".modal-backdrop").remove();
          });
        });
    }
  }
});
