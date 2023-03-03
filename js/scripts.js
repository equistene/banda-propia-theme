// remap jQuery to $
(function ($) {
  $(document).ready(function () {
    console.log("HOLA");

    $("#menuMobile").click(function () {
      $(".headerMenu").slideToggle("fast", function () {});
    });

    $(".js-slider-home").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      dots: true,
      arrows: false,
      cssEase: "linear",
    });
  });

  $(window).scroll(function () {}); //missing );

  $(window).load(function () {});

  $(window).resize(function () {});
})(window.jQuery);
