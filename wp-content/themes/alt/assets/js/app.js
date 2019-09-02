// Trgger toggle menu
var menu = document.querySelector(".menu-mobile");

function togglemenu() {
  menu.classList.toggle("active");
}

var range = document.querySelector(".wpcf7-range"),
  output = document.querySelector(".result");

if (range) {
  output.innerHTML = "R$ " + range.value;
  // use 'change' instead to see the difference in response
  range.addEventListener(
    "input",
    function() {
      output.innerHTML = "R$ " + range.value;
    },
    false
  );
}

(function($) {
  $(document).ready(function() {
    console.log("We're ready");

    $("body").on("click", function() {
      $(".wpcf7-response-output").fadeOut();
    });

    const carouselSettings = {
      arrows: false,
      dots: true
    };

    // trata select de assistecia
    var existResultsMaps = $(".content_search_map .results");
    if (existResultsMaps.length > 0) {
      var resultsMaps = $(".content_search_map .results .result");

      console.log(resultsMaps);

      if (resultsMaps.length == 0) {
        $(".wpcf7-select").hide();
      } else {
        // console.log("Existe");
        $(".wpcf7-select").html("");
        resultsMaps.each(function() {
          var dataemail = $(this).attr("data-email");
          var dataname = $(this).attr("data-name");
          $(".wpcf7-select").append(new Option(dataname, dataemail));
        });
      }
    }

    $(".changepage select").on("change", function() {
      var url = $(this).val(); // get selected value
      if (url) {
        // require a URL
        window.location = url; // redirect
      }
      return false;
    });

    $(".changepage select").on("change", function() {
      var url = $(this).val(); // get selected value
      if (url) {
        // require a URL
        window.location = url; // redirect
      }
      return false;
    });

    $(document).on("click", ".video[data-videoid]", function() {
      var idvideo = $(this).data("videoid");
      console.log(idvideo);
      var videourl =
        "https://www.youtube.com/embed/" +
        idvideo +
        "?autoplay=1&modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&fs=0&disablekb=1";

      $(".modalvideo").addClass("active");

      $(".modalvideo iframe").attr("src", videourl);

      console.log("teste");
    });

    $(document).on(
      "click",
      ".modalvideo .overlay, .modalvideo .close",
      function() {
        $(".modalvideo").removeClass("active");
        $(".modalvideo iframe").attr("src", " ");
      }
    );

    $(".painel-home").slick({
      dots: true,
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1
    });

    $(".projects .itens").slick({
      arrows: false,
      responsive: [
        {
          breakpoint: 4024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 510,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    $(".section-blog .slick").slick({
      arrows: false,
      responsive: [
        {
          breakpoint: 4024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true,
            variableWidth: true
          }
        },
        {
          breakpoint: 1108,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
            variableWidth: false
          }
        },
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 510,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    $(document).on("click", "[data-modal]", function(event) {
      event.preventDefault();
      var modal = ".modal-" + $(this).attr("data-modal");

      $(modal).addClass("active");
    });

    $(document).on("click", ".modal .close", function() {
      $(this)
        .parent()
        .parent()
        .removeClass("active");
    });

    $(".to-top").on("click", function() {
      $("html, body").animate({ scrollTop: 0 }, 1000);
    });

    $(".to-down").on("click", function() {
      $("html, body").animate(
        { scrollTop: $(".to-down-target").offset().top },
        500
      );
    });

    $(".toggle__menu").on("click", function() {
      $("body").toggleClass("menu__opened");
    });
  });
})(jQuery);

// document.getElementById("arquivo").onchange = function() {
//   document.getElementById("uploadFile").value = this.value.replace(
//     "C:\\fakepath\\",
//     ""
//   );

$("#arquivo").change(function() {
  var path = $("#arquivo")
    .val()
    .replace("C:\\fakepath\\", "");
  $("#uploadFile").val(path);
  // console.log(path);
});
