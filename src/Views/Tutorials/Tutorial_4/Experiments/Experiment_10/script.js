$(document).ready(function () {
  $("#fade-in").click(function () {
    $(".box").fadeIn("slow");
  });
  $("#fade-out").click(function () {
    $(".box").fadeOut("slow");
  });
  $("#fade-toggle").click(function () {
    $(".box").toggle("slow");
  });
  $("#fade-to").click(function () {
    $(".box").fadeTo("slow", 0.25);
  });
});
