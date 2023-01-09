(function($) {

    $(window).on("load", function() {
        $('.load').css('opacity', '1');
    });





    // ALL

    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Dynamically import the LazySizes library
        const script = document.createElement('script');
        script.src =
            'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
        document.body.appendChild(script);
    }

    

    // MENU SIZE - SCROLL DOWN
    var menu = $('body').offset().top + 150
    if ($(window).width() > 992) {

        $(window).scroll(function() {
            if ($(this).scrollTop() >= menu) {
                $('.navbar__fixed').addClass('navbar__fixed--small');
                $('.mobile-overlay').addClass('mobile-overlay--scroll');
            } else {
                $('.navbar__fixed').removeClass('navbar__fixed--small');
                $('.mobile-overlay').removeClass('mobile-overlay--scroll');
            }
        });
    }



    // HEIGHT

    $(window).on('load',function(){
      var maxHeight = Math.max.apply(null, $(".home-blog .blogSwiper .swiper-slide a h3").map(function ()                                                        {
        return $(this).innerHeight();
      }).get());
      $(".home-blog .blogSwiper .swiper-slide a h3").height( maxHeight );
      
    });


    // SCROLL

    $('#menu-main-menu-header li a[href^="#"], #menu-main-menu-header-1 li a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        var scroll;

        if($(window).scrollTop()==0){
            scroll =  ($target.offset().top) -0
        }else{
            scroll =  ($target.offset().top) -0
        }
        $('html, body').stop().animate({
            'scrollTop': scroll
        }, 900, 'swing', function () {
            //window.location.hash = target;
        });
    });




}(jQuery));