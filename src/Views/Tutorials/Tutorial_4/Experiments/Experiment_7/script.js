$(document).ready(function () {
  $(document).keypress(function (e) {
    console.log(e.which);
    if (e.which === 100 || e.which === 83) {
      $("html").attr("data-bs-theme", "dark");
    }
    if (e.which === 108 || e.which === 76) {
      $("html").attr("data-bs-theme", "light");
    }
  });
});
