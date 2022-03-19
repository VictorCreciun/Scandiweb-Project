$(document).ready(function () {
  $("#productType")
    .on("change", function () {
      $(".data").hide();
      $(".data2").hide();
      $("#" + $(this).val()).fadeIn(700);
    })
    .change();
});
