(function () {
  var $;

  $ = jQuery;

  $(document).ready(function () {
    //add headingclass//

    $(".subjectHeading").on("click", function () {
      $(this).toggleClass("open");
      $(this).toggleClass($(this).text());
      $(this).siblings(".subOffering").toggleClass("open");
      $(this).siblings(".subjectLink").toggleClass("open");
    });

    //search//

    var allIds = $(".documentation-main [id]")
      .map(function () {
        return this.id;
      })
      .get();

    var $searchInput = $("#searchInput");
    var $searchResults = $("#searchResults");

    $searchInput.on("input", function () {
      var searchValue = $(this).val().toLowerCase();
      var matchingIds = allIds.filter(function (id) {
        return id.toLowerCase().includes(searchValue);
      });

      var idList = "";
      if (matchingIds.length > 0) {
        var limitedIds = matchingIds.slice(0, 4);
        idList = limitedIds
          .map(function (id) {
            return '<li><a href="#' + id + '">' + id + "</a></li>";
          })
          .join("");
        $searchResults.css("padding", "10px");
      } else {
        idList = "<li>No match found</li>";
        $searchResults.css("padding", "10px");
      }

      $searchResults.html(idList);
      $searchResults.show();
    });

    $(document).on("click", function (e) {
      if (!$(e.target).closest("#searchContainer").length) {
        $searchResults.hide();
        $searchResults.css("padding", "0");
      }
    });

    // hamburger factory

    function hamburgerCheck() {
      if ($(window).width() < 850) {
        console.log("burger mode engaged");
        $(".headerBurger").addClass("burgerMode");
      } else {
        console.log("burger mode destroyed");
        $(".headerBurger").removeClass("burgerMode");
      }
    }

    hamburgerCheck();

    // Hero section animations

    $(window).on("resize", heroAnim);

    if ($(".heroSection")) {
      function heroAnim() {
        var $graphic4 = $("#blueRect4");
        var $graphic3 = $("#blueRect3");
        var $graphic2 = $("#blueRect2");
        var $graphic1 = $("#blueRect1");

        // get video container dimenions

        var $videoWidth = $(".videoContainer").width();
        var $videoHeight = $(".videoContainer").height();

        // set growing levels height and width for the other graphics

        var $width10 = $videoWidth + 10;
        var $width40 = $width10 + 30;
        var $width70 = $width40 + 30;
        var $width120 = $width70 + 50;

        var $height10 = $videoHeight + 10;
        var $height40 = $height10 + 30;
        var $height70 = $height40 + 30;
        var $height120 = $height70 + 50;

        $graphic4.width($width10).height($height10);
        $graphic3.width($width40).height($height40);
        $graphic2.width($width70).height($height70);
        $graphic1.width($width120).height($height120);

        // locate graphics EXACTLY around the video container

        var videoRect = $(".videoContainer")[0].getBoundingClientRect();
        var videoCenterX = videoRect.left + $videoWidth / 2;
        var videoCenterY = videoRect.top + $videoHeight / 2;

        $graphic4.css("left", videoCenterX - $width10 / 2);
        $graphic4.css("top", videoCenterY - $height10 / 2);

        $graphic3.css("left", videoCenterX - $width40 / 2);
        $graphic3.css("top", videoCenterY - $height40 / 2);

        $graphic2.css("left", videoCenterX - $width70 / 2);
        $graphic2.css("top", videoCenterY - $height70 / 2);

        $graphic1.css("left", videoCenterX - $width120 / 2);
        $graphic1.css("top", videoCenterY - $height120 / 2);

        // create fade in animation to hide any jumping around

        $graphic1.addClass("fadeInClass");
        $graphic2.addClass("fadeInClass");
        $graphic3.addClass("fadeInClass");
        $graphic4.addClass("fadeInClass");
      }

      heroAnim();

      //mouse tracking animations

      $(window).on("mousemove", updateGraphicPosition);

      var $graphic4Move = $("#blueRect4");
      var $graphic3Move = $("#blueRect3");
      var $graphic2Move = $("#blueRect2");
      var $graphic1Move = $("#blueRect1");

      var $xMovement4 = 5;
      var $yMovement4 = 5;

      var $xMovement3 = 10;
      var $yMovement3 = 10;

      var $xMovement2 = 15;
      var $yMovement2 = 15;

      var $xMovement1 = 20;
      var $yMovement1 = 20;

      function updateGraphicPosition(e) {
        var pos4X = ((e.clientX / $(window).width()) * 2 - 1) * $xMovement4;
        var pos4Y = ((e.clientY / $(window).height()) * 2 - 1) * $yMovement4;

        var pos3X = ((e.clientX / $(window).width()) * 2 - 1) * $xMovement3;
        var pos3Y = ((e.clientY / $(window).height()) * 2 - 1) * $yMovement3;

        var pos2X = ((e.clientX / $(window).width()) * 2 - 1) * $xMovement2;
        var pos2Y = ((e.clientY / $(window).height()) * 2 - 1) * $yMovement2;

        var pos1X = ((e.clientX / $(window).width()) * 2 - 1) * $xMovement1;
        var pos1Y = ((e.clientY / $(window).height()) * 2 - 1) * $yMovement1;

        $graphic4Move.css("transform", `translate(${pos4X}px, ${pos4Y}px)`);
        $graphic3Move.css("transform", `translate(${pos3X}px, ${pos3Y}px)`);
        $graphic2Move.css("transform", `translate(${pos2X}px, ${pos2Y}px)`);
        $graphic1Move.css("transform", `translate(${pos1X}px, ${pos1Y}px)`);

        $(window).trigger('resize');
      }

      // Hero form funnctionality

      //get ID of chosen answer (who1 who2 who3 etc)

      $(".whoWhere").on("change", "#whoList", function () {
        var whoAnswer = $(this).val();
        var whoID = $(this).find("option:selected").attr("id");

        console.log(whoAnswer);
        console.log(whoID);

        //showing only answer connected to the chosen ID by adding and removing hidden class

        if (whoID === "who1") {
          console.log("who1 to show");
          $("#whereList").find(".where1answer").removeClass("hidden");
          $("#whereList").find(".where2answer").addClass("hidden");
          $("#whereList").find(".where3answer").addClass("hidden");
        } else if (whoID === "who2") {
          console.log("who2 to show");
          $("#whereList").find(".where1answer").addClass("hidden");
          $("#whereList").find(".where2answer").removeClass("hidden");
          $("#whereList").find(".where3answer").addClass("hidden");
        } else if (whoID === "who3") {
          console.log("who3 to show");
          $("#whereList").find(".where1answer").addClass("hidden");
          $("#whereList").find(".where2answer").addClass("hidden");
          $("#whereList").find(".where3answer").removeClass("hidden");
        }
      });
    }

    //  CTA animation functions
    function ctaAnims() {
      $(".ctaButton").each(function () {
        //(store original width for later animation)
        $originalWidth = $(this).width();

        //adjust width to layout and append svg line

        var parentWidth = $(this).parent().width();
        var newWidth = parentWidth;
        $(this).width(newWidth);
        var elementColor = $(this).css("color");
        var svgLine = $('<svg xmlns="http://www.w3.org/2000/svg" version="1.1">')
          .attr("width", newWidth)
          .attr("height", 1)
          .append($("<line>").attr("x1", 0).attr("y1", 0).attr("x2", newWidth).attr("y2", 0).attr("stroke", elementColor).attr("stroke-width", 3));

        var svgString = $("<div>").append(svgLine.clone()).html();

        $(this).append(svgString);

        // On hover revert line length to the original length of the CTA

        $(this).hover(
          function () {
            $(this).find("svg").attr("width", $originalWidth);
          },
          function () {
            $(this).find("svg").attr("width", newWidth);
          }
        );
      });
    }

    ctaAnims();

    if (typeof acf !== "undefined") {
      acf.unload.active = false;
    }

    // Slick Slider Functions
    if ($(window).width() < 850) {
      $(".gallery-slider").slick({
        slidesToShow: 1.5,
        slidesToScroll: 1,
        dots: true,
        swipeToSlide: true,
        infinite: false,
        prevArrow: "<button type='button' class='slick-prev pull-left' aria-hidden='true' ></button>",
        nextArrow: "<button type='button' class='slick-next pull-right' aria-hidden='true' ></button>",
      });
    } else {
      $(".gallery-slider").slick({
        slidesToShow: 3.5,
        slidesToScroll: 1,
        dots: true,
        swipeToSlide: true,
        infinite: false,
        prevArrow: "<button type='button' class='slick-prev pull-left' aria-hidden='true' ></button>",
        nextArrow: "<button type='button' class='slick-next pull-right' aria-hidden='true' ></button>",
      });
    }

    //CTA functions
  });
}).call(this);
