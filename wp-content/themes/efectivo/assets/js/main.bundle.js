!function(o){if(o(window).on("load",(function(){o(".load").css("opacity","1")})),"loading"in HTMLImageElement.prototype)document.querySelectorAll('img[loading="lazy"]').forEach((o=>{o.src=o.dataset.src}));else{const o=document.createElement("script");o.src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js",document.body.appendChild(o)}var e=o("body").offset().top+150;o(window).width()>992&&o(window).scroll((function(){o(this).scrollTop()>=e?(o(".navbar__fixed").addClass("navbar__fixed--small"),o(".mobile-overlay").addClass("mobile-overlay--scroll")):(o(".navbar__fixed").removeClass("navbar__fixed--small"),o(".mobile-overlay").removeClass("mobile-overlay--scroll"))})),o(window).on("load",(function(){var e=Math.max.apply(null,o(".home-blog .blogSwiper .swiper-slide a h3").map((function(){return o(this).innerHeight()})).get());o(".home-blog .blogSwiper .swiper-slide a h3").height(e)})),o('.navbar__fixed-nav li a[href^="#"]').on("click",(function(e){e.preventDefault();var l,a=this.hash,i=o(a);o(window).scrollTop(),l=i.offset().top-0,o("html, body").stop().animate({scrollTop:l},900,"swing",(function(){}))})),o(".home-packages-box-item .btn-white").on("click",(function(e){o("select").val(o(this).data("value")),o("body").addClass("is-popup")})),o(".footer .txt button").on("click",(function(e){o("body").addClass("is-popup")})),o(".popup .close").on("click",(function(e){o("body").removeClass("is-popup")}))}(jQuery);
//# sourceMappingURL=main.bundle.js.map