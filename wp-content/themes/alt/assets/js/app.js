(function ($) {
    $(document).ready(function () {
        console.log("We're ready");

        $('body').on('click', function () {

            $('.wpcf7-response-output').fadeOut();
        })

        const carouselSettings = {
            arrows: false,
            dots: true,
        }

        $('.carousel').slick(carouselSettings);

        $('.depoimentos').slick(carouselSettings);

        $('.section-images .images').slick({
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

        $('.to-top').on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, 1000);
        });

        $('.to-down').on('click', function () {
            $('html, body').animate({ scrollTop: $('.to-down-target').offset().top }, 500);
        });

        $('.toggle__menu').on('click', function () {
            $('body').toggleClass('menu__opened');
        });
    });
})(jQuery);
