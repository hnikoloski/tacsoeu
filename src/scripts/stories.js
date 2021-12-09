const axios = require("axios");
jQuery(document).ready(function ($) {
  if ($(".story-archive").length) {
    getStories();

    function formatDateForOrders(date) {
      return new Date(date).toLocaleDateString("en-GB", {
        month: "long",
        day: "numeric",
        year: "numeric",
      });
    }
    $(".cat-filter a").on("click", function (e) {
      e.preventDefault();
      $(".cat-filter a").removeClass("active");
      $(this).addClass("active");
      let selectedCat = $(this).attr("href");
      $(".blog-card").hide();
      $(`.blog-card-${selectedCat}`).show();
    });

    function getStories() {
      axios
        .get("/wp-json/wp/v2/story?_embed")
        .then(function (response) {
          let html = response.data.map((story) => {
            let countryTotal = story.ACF.country_tag.length;
            console.log(story._embedded["wp:featuredmedia"][0].source_url);
            if (countryTotal > 1) {
              countryTotal = story.ACF.country_tag.length - 1;
            }
            let countryTag = ` <span class="additional-countries">
            +               ${countryTotal} </span>
            </div>`;
            return ` <a href="${
              story.link
            }" data-post-id="443" class="animated fadeInUp blog-card blog-card-all blog-card-${
              story.storycategory
            } d-block d-flex flex-direction-col flex-wrap justify-content-start align-items-start">
            <div class="img-wrapper">
                <img src="${
                  story._embedded["wp:featuredmedia"][0].source_url
                }" alt="GoFor Launched Map for Registering Challenges and Violations of Rights Young People Face During COVID-19">
            </div>
                    <div class="country-tags">
                                        <div class="main-country">${
                                          story.ACF.country_tag[0].post_title
                                        }</div>
                                   ${countryTag}
                <p class="date">${formatDateForOrders(story.date)}</p>
            <h3>${story.title.rendered}</h3>
        </a>`;
          });
          $(".story-archive").html(html);
        })
        .catch(function (error) {
          console.log(error);
        });
    }
  }
});
