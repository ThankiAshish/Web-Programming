import { tutorials } from "./data.js";

tutorials.forEach((item) => {
  const box = `
        <div class="box">
          <div class="title-container">
            <h1>${item.name}</h1>
          </div>
          <div class="buttons-container">
            <a
              href=${item.code}
              class="btn btn-small">See Code</a
            >
            <a
              href=${item.url}
              class="btn btn-small btn-accent">Demo</a
            >
          </div>
        </div>`;
  $(".tutorials-container").append(box);
});

$(document).ready(function () {
  $("#menu").click(function () {
    $(this).toggleClass("fa-times");
    $("header").toggleClass("toggle");
  });

  $(window).on("scroll load", function () {
    $("#menu").removeClass("fa-times");
    $("header").removeClass("toggle");

    if ($(window).scrollTop() > 0) {
      $(".top").show();
    } else {
      $(".top").hide();
    }
  });

  $('a[href*="#"]').on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
      { scrollTop: $($(this).attr("href")).offset().top },
      500,
      "linear"
    );
  });

  $("#download").click(function (e) {
    e.preventDefault();
    window.location.href = "./downloads/Resume.pdf";
  });
});
