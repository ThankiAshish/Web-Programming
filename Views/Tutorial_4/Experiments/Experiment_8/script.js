$(document).ready(function () {
  $("#btn").click(function () {
    let div = $("div");
    startAnimation();
    function startAnimation() {
      div.animate({ height: "150px" }, "slow");
      div.animate({ width: "150px" }, "slow");
      div.animate({ height: "50px" }, "slow");
      div.animate({ width: "50px" }, "slow", startAnimation);
    }
  });
});
