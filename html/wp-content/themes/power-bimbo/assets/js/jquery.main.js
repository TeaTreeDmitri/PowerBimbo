(function () {
    var $;
  
    $ = jQuery;

  
    $(document).ready(function () {
      if (typeof acf !== "undefined") {
        acf.unload.active = false;
      }

      

      $(".gallery-slider").slick({
        slidesToShow: 3.5,
        slidesToScroll: 1,
        dots: true,
        swipeToSlide: true,
        infinite: false,
        prevArrow:"<button type='button' class='slick-prev pull-left' aria-hidden='true' ></button>",
        nextArrow:"<button type='button' class='slick-next pull-right' aria-hidden='true' ></button>"
      }
      );
  
    });
}.call(this));