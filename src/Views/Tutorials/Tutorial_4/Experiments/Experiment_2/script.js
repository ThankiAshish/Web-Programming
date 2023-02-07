$(document).ready(function () {
  $("#check").click(function () {
    if ($(this).is(":checked")) {
      $("button").removeAttr("disabled");
    } else {
      $("button").attr("disabled", "disabled");
    }
  });
});
