(function($) {

        $(document).ready(function() {

    var swiper = new Swiper(".blogSwiper", {
            slidesPerView:1,
            spaceBetween: 0,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
          });

    });
    }

    (jQuery));