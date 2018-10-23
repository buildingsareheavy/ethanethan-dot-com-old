$(document).ready(function() {
  $("#header-img, .language")
    .delay(500)
    .fadeIn(2000);

  $(".lang").click(function() {
    $("section").removeClass("hidden");

    $("html,body")
      .delay(400)
      .animate(
        {
          scrollTop: $("#top").offset().top
        },
        1100
      );
  });

  $(".lang").on("click", function(e) {
    e.preventDefault();
    var url = this.href;

    $("#more").remove();
    $("#all")
      .load(url + " #more")
      .hide()
      .fadeIn("slow");
  });
});
