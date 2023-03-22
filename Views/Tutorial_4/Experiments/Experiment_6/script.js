$(document).ready(function () {
  $(".img-computer").mouseenter(function () {
    enter(".img-computer");
  });
  $(".img-computer").mouseleave(function () {
    leave(".img-computer");
  });
  $(".img-civil").mouseenter(function () {
    enter(".img-civil");
  });
  $(".img-civil").mouseleave(function () {
    leave(".img-civil");
  });
  $(".img-mechanical").mouseenter(function () {
    enter(".img-mechanical");
  });
  $(".img-mechanical").mouseleave(function () {
    leave(".img-mechanical");
  });
  $("#header-text").mouseover(function () {
    $("#header-text").css("color", "blue");
  });
  $("#header-text").mouseout(function () {
    $("#header-text").css("color", "white");
  });
  $("#header-text").mousedown(function () {
    alert("You Clicked Header!");
  });

  function enter(className) {
    $(className).css("width", "97%");
  }
  function leave(className) {
    $(className).css("width", "100%");
  }
});
