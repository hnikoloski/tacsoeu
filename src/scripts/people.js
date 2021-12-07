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
    });
    $(".single-person a").on("click", function (e) {
      e.preventDefault();

      $(this).on("keyup", function (e) {
        if (e.key == "Enter" || e.key == "Escape")
          $(".person-modal").removeClass("active");
      });
      let presonId = $(this).attr("href");
      getPersonDetails(presonId);
    });
    $(".person-modal .close-modal").on("click", function (e) {
      e.preventDefault();
      $(".person-modal").removeClass("active");
    });

    function getPersonDetails(personId) {
      axios
        .get("/wp-json/wp/v2/people/" + personId + "?_embed")
        .then(function (response) {
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
          $(".person-modal").addClass("active");
        });
    }
  }
});
