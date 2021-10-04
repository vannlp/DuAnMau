$(document).ready(() => {
  var btn_all = $("#chon_all");
  var checks = $(".checks");
  var btn_bo_chon = $("#bo_chon");

  btn_all.click(function () {
    // alert("hello");
    checks.each(function () {
      $(this).attr("checked", true);
    });
  });
  btn_bo_chon.click(function () {
    // alert("hello");
    checks.each(function () {
      $(this).attr("checked", false);
    });
  });
});
