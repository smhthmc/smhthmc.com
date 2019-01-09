$(document).ready(function() {
  $(window).on("load", function() {
    var t = $(".work-filter"),
      a = $("#menu-filter");

    t.isotope({
      filter: "*",
      layoutMode: "masonry",
      animationOptions: { duration: 750, easing: "linear" }
    }),
      a.find("a").on("click", function() {
        console.log("done");
        var n = $(this).attr("data-filter");
        return (
          a.find("a").removeClass("active"),
          $(this).addClass("active"),
          t.isotope({
            filter: n,
            animationOptions: {
              animationDuration: 750,
              easing: "linear",
              queue: !1
            }
          }),
          !1
        );
      });
  });
});
