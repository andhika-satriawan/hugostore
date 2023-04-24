//   all ------------------
function initZonar() {
    "use strict";
    firstLoad();
    function firstLoad() {
        var counter = 0;
        var count = 0;
        var i = setInterval(function () {
            jQuery(".loader_count").html(count);
            counter++;
            count++;
            if (counter == 100) {
                clearInterval(i);
            }
        }, 13);
        TweenMax.to(jQuery(".loading-text-container"), 1.0, {
            force3D: true,
            y: "-150px",
            opacity: 0,
            ease: Expo.easeInOut,
            delay: 1.2,
            onComplete: function () {
                TweenMax.to(jQuery(".loader-anim"), 0.8, {
                    force3D: true,
                    bottom: "100%",
                    ease: Expo.easeInOut,

                });
                TweenMax.to(jQuery(".loader-anim2"), 0.8, {
                    force3D: true,
                    bottom: "100%",
                    delay: 0.2,
                    ease: Expo.easeInOut,
                    onComplete: function () {
                        jQuery(".loader").fadeOut(1);
                    }
                });
            }
        });
        var chdpt = jQuery(".content").data("pagetitle");
        jQuery(".page-subtitle span").text(chdpt);
    }
    //   Background image ------------------
    var a = jQuery(".bg");
    a.each(function (a) {
        if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
    });
    //   Isotope------------------
    function n() {
        if (jQuery(".gallery-items").length) {
            var jQuerygrid = jQuery(".gallery-items").isotope({
                singleMode: true,
                columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                transformsEnabled: true,
                transitionDuration: "700ms",
            });
            jQuerygrid.imagesLoaded(function () {
                jQuerygrid.isotope("layout");
            });
            jQuery(".gallery-filters").on("click", "a.gallery-filter", function (b) {
                b.preventDefault();
                var c = jQuery(this).attr("data-filter"),
                    d = jQuery(this).text();
                setTimeout(function () {
                    jQuerygrid.isotope({
                        filter: c
                    });
                }, 200);

                jQuery(".gallery-filters a").removeClass("gallery-filter-active");
                jQuery(this).addClass("gallery-filter-active");
                TweenLite.to(window, 0.2, {
                    scrollTo: {
                        y: jQuery("#port-scroll"),
                        offsetY: 70,
                        autoKill: false,

                    }
                });
            });
            var gat = jQuery(".gallery-filter-active").text();
        }
        jQuery(".gallery-items").isotope("on", "layoutComplete", function (a, b) {
            var b = a.length,
                nas = jQuery(".num-album span");
            jQuery(".num-album span").html(b);
        });
        var b = jQuery(".gallery-item").length;
        jQuery(".all-album , .num-album span").html(b);
    }
    n();
    //   Isotope------------------
    function inithorizontalPortfolio() {
        if (jQuery("#portfolio_horizontal_container").length) {
            var d = jQuery("#portfolio_horizontal_container");
            d.imagesLoaded(function (a, b, e) {
                var f = {
                    itemSelector: ".portfolio_item",
                    layoutMode: "packery",
                    packery: {
                        isHorizontal: true,
                        gutter: 0
                    },
                    resizable: true,
                    transformsEnabled: true,
                    transitionDuration: "700ms"
                };
                var g = {
                    itemSelector: ".portfolio_item",
                    layoutMode: "packery",
                    packery: {
                        isHorizontal: false,
                        gutter: 0
                    },
                    resizable: true,
                    transformsEnabled: true,
                    transitionDuration: "700ms"
                };
                if (jQuery(window).width() < 764) {
                    d.isotope(g);
                    d.isotope("layout");
                    d.removeAttr('style');
                    jQuery(".horizontal-grid-wrap").getNiceScroll().remove();
                } else {
                    d.isotope(f);
                    d.isotope("layout");
                    jQuery(".horizontal-grid-wrap").niceScroll({
                        cursorwidth: "2px",
                        cursorborder: "none",
                        cursorborderradius: "0px",
                        touchbehavior: true,
                        autohidemode: false,
                        cursorcolor: "#F57500",
                        bouncescroll: false,
                        scrollspeed: 120,
                        mousescrollstep: 90,
                        grabcursorenabled: true,
                        horizrailenabled: true,
                        preservenativescrolling: true,
                        cursordragontouch: false,
                        railpadding: {
                            top: -70,
                            right: 0,
                            left: 0,
                            bottom: -4
                        }
                    });
                }
                jQuery(".horizontal-grid-wrap").scroll(function () {
                    var winScroll = jQuery("#portfolio_horizontal_container").width() - jQuery(".horizontal-grid-wrap").width();
                    var width = jQuery(".horizontal-grid-wrap").scrollLeft();
                    var scrolled = ((width / winScroll) * 100);
                    jQuery(".js-progress-bar").css("stroke-dashoffset", 100 - (scrolled));
                });
                jQuery(".gallery-filters").on("click", "a", function (a) {
                    a.preventDefault();
                    var b = jQuery(this).attr("data-filter");
                    d.isotope({
                        filter: b
                    });
                    jQuery(".gallery-filters a").removeClass("gallery-filter-active");
                    jQuery(this).addClass("gallery-filter-active");
                    if (jQuery(window).width() < 778) {
                        setTimeout(function () {
                            TweenLite.to(jQuery(window), 0.7, {
                                scrollTo: {
                                    y: jQuery("#portfolio_horizontal_container"),
                                    offsetY: 70,
                                    autoKill: false,
                                }
                            });
                        }, 1200);
                    }
                });
                d.isotope("on", "layoutComplete", function (a, b) {
                    var b = a.length,
                        numalb = jQuery(".num-album");
                    numalb.html(b);
                });
                var j = jQuery(".portfolio_item").length;
                jQuery(".all-album , .num-album").html(j);
            });
        }
    }
    inithorizontalPortfolio();
    //  swiper ------------------
    if (jQuery(".home-half-slider").length > 0) {
        var j = new Swiper(".fs-gallery-wrap .swiper-container", {
            preloadImages: false,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            resistance: true,
            resistanceRatio: 0.6,
            speed: jQuery('.fs-gallery-wrap .swiper-container').data('slider-speed'),
            spaceBetween: 0,
            parallax: false,
            effect: "slide",
            mousewheel: true,
			init:false,
            pagination: {
                el: '.hero-slider-wrap_pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.hsc-next',
                prevEl: '.hsc-prev',
            },
            autoplay: {
                delay: jQuery('.fs-gallery-wrap .swiper-container').data('slider-delay'),
                disableOnInteraction: false
            },
        });

        j.on('slideChange', function () {
            var csli = j.realIndex + 1,
                curnum = jQuery('.current'),
                curnumanm = jQuery('.hs_counter .current');
            TweenMax.to(curnumanm, 0.2, {
                force3D: true,
                y: -10,
                opacity: 0,
                ease: Power2.easeOut,
                onComplete: function () {
                    TweenMax.to(curnumanm, 0.1, {
                        force3D: true,
                        y: 10
                    });
                    curnum.html('0' + csli);
                }
            });
            TweenMax.to(curnumanm, 0.2, {
                force3D: true,
                y: 0,
                delay: 0.3,
                opacity: 1,
                ease: Power2.easeOut
            });
        });
        j.on("slideChangeTransitionStart", function () {
            jQuery(".hc_dec").addClass("start_anim");
            jQuery(".slider-progress-bar").removeClass("act-slider");
        });
        j.on("slideChangeTransitionEnd", function () {
            jQuery(".hc_dec").removeClass("start_anim");
            jQuery(".slider-progress-bar").addClass("act-slider");
        });
        var imageSwiper = new Swiper(".hero-slider-img .swiper-container", {
            preloadImages: false,
            loop: true,
            resistance: true,
            parallax: true,
            effect: "slide",
        });
        j.controller.control = imageSwiper;
        imageSwiper.controller.control = j;
        var autobtn = jQuery(".play-pause_slider");
        function autoEnd() {
            autobtn.removeClass("auto_actslider");
            j.autoplay.stop();
        }
        function autoStart() {
            autobtn.addClass("auto_actslider");
            j.autoplay.start();
        }
        autobtn.on("click", function () {
            if (autobtn.hasClass("auto_actslider")) autoEnd();
            else autoStart();
            return false;
        });
        setTimeout(function () {
            j.init();
            var totalSlides = j.slides.length - 2;
            jQuery('.total').html('0' + totalSlides);
        }, 2000);
    }
    if (jQuery(".testimonilas-carousel").length > 0) {
        var j2 = new Swiper(".testimonilas-carousel .swiper-container", {
            preloadImages: false,
            slidesPerView: 2,
            spaceBetween: 10,
            loop: true,
            grabCursor: true,
            mousewheel: false,
            centeredSlides: true,
			speed: jQuery('.testimonilas-carousel .swiper-container').data('slider-speed'), 
			autoplay: jQuery('.testimonilas-carousel .swiper-container').data('slider-play'),
            pagination: {
                el: '.tc-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.tc-button-next',
                prevEl: '.tc-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 1,
                },
				550: {
                    slidesPerView: 1,
                },
				300: {
                    slidesPerView: 1,
                },
            }
        });
    }
    //   sliders ------------------
    function setUpCarouselSlider() {
        jQuery('.fw-carousel .swiper-wrapper').addClass('no-horizontal-slider');
        if (jQuery(".fw-carousel").length > 0) {
            if (jQuery(window).width() >= 764 && j2 == undefined) {
                var totalSlides2 = jQuery(".fw-carousel .swiper-slide").length - 1;
                var mouseContr = jQuery(".fw-carousel").data("mousecontrol");
                var j2 = new Swiper(".fw-carousel .swiper-container", {
                    preloadImages: true,
                    loop: false,
                    freeMode: true,
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    grabCursor: true,
                    mousewheel: mouseContr,
                    speed: 1400,
                    direction: "horizontal",
                    scrollbar: {
                        el: '.hs_init',
                        draggable: true,
                    },
                    effect: "slide",
                    pagination: {
                        el: '.fw-carousel-counter',
                        type: 'fraction',
                        renderFraction: function (currentClass) {
                            return '<span class="' + currentClass + '"></span>' + '' + '<span class="j2total">' + totalSlides2 + '</span>';
                        }
                    },
                    navigation: {
                        nextEl: '.fw-carousel-button-next',
                        prevEl: '.fw-carousel-button-prev',
                    },
                    on: {
                        resize: function () {
                            if (jQuery(window).width() < 640) {
                                j2.update();
                            }
                        },
                    }
                });
                jQuery(".fw-carousel.thumb-contr .swiper-slide img").each(function () {
                    var ccasdc = jQuery(this).attr("src");
                    jQuery("<div class='thumb-img'><img src='" + ccasdc + "'></div>").appendTo(".thumbnail-wrap");
                });
                jQuery(".thumb-img").on('click', function () {
                    j2.slideTo(jQuery(this).index(), 500);
                    hideThumbnails();
                });
            }
            if (jQuery(window).width() < 640 && j2 !== undefined) {
                j2.destroy();
                j2 = undefined;
                jQuery('.fw-carousel .swiper-wrapper').removeAttr('style').addClass('no-horizontal-slider');
                jQuery('.swiper-slide').removeAttr('style');
            }
        }
    }
    setUpCarouselSlider();
    if (jQuery(".fs-slider").length > 0) {
        jQuery(".fs-slider.thumb-contr .swiper-slide .bg").each(function () {
            var ccasdc3 = jQuery(this).attr("data-bg");
            jQuery("<div class='thumb-img'><img src='" + ccasdc3 + "'></div>").appendTo(".thumbnail-wrap");
        });
        jQuery(".thumb-img").on('click', function () {
            j3.slideTo(jQuery(this).index() + 1, 1);
            hideThumbnails();
        });
        var totalSlides4 = jQuery(".fs-slider .swiper-slide").length;
        jQuery('.hsc_total').html('0' + totalSlides4);
        var mouseContr2 = jQuery(".fs-slider").data("mousecontrol2");
        var j3 = new Swiper(".fs-slider .swiper-container", {
            preloadImages: true,
            loop: true,
            grabCursor: true,
            speed: 1400,
            spaceBetween: 0,
            effect: "slide",
				init:false,
            mousewheel: mouseContr2,
            pagination: {
                el: '.fs-slider-wrap_pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.fsc-next',
                prevEl: '.fsc-prev',
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            },
        });
        jQuery('.hsc_counter span').html('01');
        j3.on('slideChange', function () {
            var csli3 = j3.realIndex + 1,
                curnum3 = jQuery('.hsc_counter span');
            curnum3.html('0' + csli3);
        });
        j3.on("slideChangeTransitionStart", function () {
            jQuery(".slider-progress-bar").removeClass("act-slider");
        });
        j3.on("slideChangeTransitionEnd", function () {
            jQuery(".slider-progress-bar").addClass("act-slider");
        });
        var autobtn2 = jQuery(".play-pause_slider2");
        function autoEnd2() {
            autobtn2.removeClass("auto_actslider2");
            j3.autoplay.stop();
        }
        function autoStart2() {
            autobtn2.addClass("auto_actslider2");
            j3.autoplay.start();
        }
        autobtn2.on("click", function () {
            if (autobtn2.hasClass("auto_actslider2")) autoEnd2();
            else autoStart2();
            return false;
        });
        setTimeout(function () {
            j3.init();
        }, 2000);
    }
    if (jQuery(".center-carousel").length > 0) {
        var j2 = new Swiper(".center-carousel .swiper-container", {
            preloadImages: true,
            slidesPerView: 'auto',
            spaceBetween: 10,
            loop: true,
            grabCursor: true,
            mousewheel: false,
            centeredSlides: true,
            autoHeight: false,
            pagination: {
                el: '.ss-slider-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.ccsw-next',
                prevEl: '.ccsw-prev',
            },
        });
    }
    if (jQuery(".single-slider").length > 0) {
        var j2 = new Swiper(".single-slider .swiper-container", {
            preloadImages: false,
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoHeight: true,
            grabCursor: true,
            mousewheel: false,
            pagination: {
                el: '.ss-slider-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.ss-slider-cont-next',
                prevEl: '.ss-slider-cont-prev',
            },
        });
    }
    if (jQuery(".slideshow-container_wrap").length > 0) {
        var ms1 = new Swiper(".slideshow-container_wrap .swiper-container", {
            preloadImages: false,
            loop: true,
            speed: jQuery('.slideshow-container_wrap .swiper-container').data('slider-speed'), //1400
            spaceBetween: 0,
            effect: "fade",
			init:false,
            autoplay: {
                delay: jQuery('.slideshow-container_wrap .swiper-container').data('slider-delay'),
                disableOnInteraction: false
            },
            pagination: {
                el: '.fcwc-pagination',
                clickable: true,
            },
        });
        setTimeout(function () {
            ms1.init();
        }, 2000);
    }
    if (jQuery(".hero-carousel ").length > 0) {
        var totalSlides3 = jQuery(".hero-carousel .swiper-slide").length;
        var heroCarusel = new Swiper(".hero-carousel .swiper-container", {
            preloadImages: false,
            loop: true,
            centeredSlides: true,
            freeMode: false,
            slidesPerView: 3,
            spaceBetween: 6,
            grabCursor: true,
            mousewheel: true,
            parallax: true,
            speed: jQuery('.hero-carousel .swiper-container').data('slider-speed'),
            effect: "slide",
			init:false,
            autoplay: {
                delay: jQuery('.hero-carousel .swiper-container').data('slider-delay'),
                disableOnInteraction: false
            },
            pagination: {
                el: '.fs-slider-wrap_pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.ss-slider-cont-next',
                prevEl: '.ss-slider-cont-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                640: {
                    slidesPerView: 1,
                    centeredSlides: false,
                },
            }
        });
        jQuery('.hsc_counter span').html('01');
		jQuery('.hsc_total').html('0' + totalSlides3);
        heroCarusel.on('slideChange', function () {
            var csli2 = heroCarusel.realIndex + 1,
                curnum2 = jQuery('.hsc_counter span');
            curnum2.html('0' + csli2);
        });

        heroCarusel.on("slideChangeTransitionStart", function () {
            jQuery(".slider-progress-bar").removeClass("act-slider");
        });
        heroCarusel.on("slideChangeTransitionEnd", function () {
            jQuery(".slider-progress-bar").addClass("act-slider");
        });
        setTimeout(function () {
            heroCarusel.init();
        }, 2000);
    }
    if (jQuery(".grid-carousel ").length > 0) {
        var totalSlides2 = jQuery(".grid-carousel .swiper-slide").length;
        var gridCarusel = new Swiper(".grid-carousel .swiper-container", {
            preloadImages: true,
            loop: true,
            centeredSlides: false,
            freeMode: false,
            slidesPerView: 2,
            spaceBetween: 4,
            grabCursor: true,
            mousewheel: false,
            parallax: false,
            speed: jQuery('.grid-carousel .swiper-container').data('slider-speed'), 
			autoplay: jQuery('.grid-carousel .swiper-container').data('slider-play'),
            navigation: {
                nextEl: '.gc-slider-cont-next',
                prevEl: '.gc-slider-cont-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 1,
                },
				550: {
                    slidesPerView: 1,
                },
				300: {
                    slidesPerView: 1,
                },
            }
        });
    }
    //   lightGallery------------------
    function lightGalleryInit() {
        jQuery(".image-popup").lightGallery({
            selector: "this",
            cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
            download: false,
            counter: false
        });
        var o = jQuery(".lightgallery"),
            p = o.data("looped");
        o.lightGallery({
            selector: ".lightgallery a.popup-image",
            cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
            download: false,
            loop: false,
            counter: false
        });
        jQuery('#html5-videos').lightGallery({
            selector: 'this'
        });
        jQuery(".dynamic-gal").on('click', function () {
            var dynamicgal = eval(jQuery(this).attr("data-dynamicPath"));
            jQuery(this).lightGallery({
                dynamic: true,
                dynamicEl: dynamicgal,
                download: false,
                loop: false,
                counter: false
            });

        });
    }
    lightGalleryInit();
    //   appear------------------
    jQuery(".stats").appear(function () {
        jQuery(".num").countTo();
    });
    jQuery(".skillbar-box").appear(function () {
        jQuery(this).find("div.skillbar-bg").each(function () {
            jQuery(this).find(".custom-skillbar").delay(600).animate({
                width: jQuery(this).attr("data-percent")
            }, 1500);
        });
    });
    jQuery(".piechart-holder").appear(function () {
        jQuery(this).find(".chart").each(function () {
            var cbc = jQuery(".piechart-holder").attr("data-skcolor");
            jQuery(".chart").easyPieChart({
                barColor: cbc,
                trackColor: "#eee",
                scaleColor: "#eee",
                size: "70",
                lineWidth: "12",
                lineCap: "butt",
                animate: 3500,
                easing: "easeInBounce",
                onStep: function (a, b, c) {
                    jQuery(this.el).find(".percent").text(Math.round(c));
                }
            });
        });
    });
    
    // scroll nav ------------------
    jQuery(".page-scroll-nav_wrap ").singlePageNav({
        filter: ":not(.external)",
        updateHash: false,
        offset: 70,
        threshold: 120,
        speed: 1200,
        currentClass: "act-sec"
    });
    //   scroll to------------------
    jQuery(".custom-scroll-link").on("click", function () {
        var a = 80;
        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") || location.hostname === this.hostname) {
            var b = jQuery(this.hash);
            b = b.length ? b : jQuery("[name=" + this.hash.slice(1) + "]");
            if (b.length) {
                TweenLite.to(jQuery("html,body"), 1, {
                    scrollTo: {
                        y: b.offset().top,
                        offsetY: 80,
                        autoKill: false
                    }
                });
                return false;

            }
        }
    });
    jQuery(".to-top").on("click", function () {
        TweenLite.to(window, 2, {
            scrollTo: {
                y: 0,
                offsetY: 0,
                autoKill: false
            }
        });
    });
    // progressBar ------------------
    var progressBar = jQuery(".js-progress-bar");
    var jQuerywindow = jQuery(window);
    jQuerywindow.on("scroll", function (a) {
        var a = jQuery(document).height();
        var b = jQuery(window).height();
        var c = jQuery(window).scrollTop();
        var d = c / (a - b) * 100;
        progressBar.css("stroke-dashoffset", 100 - (d));
    });
    jQuery('.hero-decor-let').rotaterator({
        fadeSpeed: 500,
        pauseSpeed: 1200
    });
    var jQuerywindow = jQuery(window);
    // Styles ------------------
    function csselem() {
        jQuery(".half-slider-item").css({
            height: jQuery(".half-slider-wrap").outerHeight(true)
        });
        jQuery(".half-slider-img-item").css({
            height: jQuery(".half-slider-img").outerHeight(true)
        });
        jQuery(".fs-slider-item").css({
            height: jQuery(".fs-slider-wrap").outerHeight(true) - 6 + "px"
        });
        jQuery(".ms-item_fs").css({
            height: jQuery(".slideshow-container_wrap").outerHeight(true)
        });
        jQuery(".horizontal-grid-wrap").css({
            height: jQuery(".hor-content_padd").outerHeight(true) - 75 + "px"
        });
        jQuery(".fw-carousel .swiper-container").css({
            height: jQuery(".fw-carousel").outerHeight(true)
        });
    }
    csselem();
    jQuerywindow.resize(function () {
        csselem();
        inithorizontalPortfolio();
    });
    //   accordion ------------------
    jQuery(".accordion a.toggle").on("click", function (a) {
        a.preventDefault();
        jQuery(".accordion a.toggle").removeClass("act-accordion");
        jQuery(this).addClass("act-accordion");
        if (jQuery(this).next('div.accordion-inner').is(':visible')) {
            jQuery(this).next('div.accordion-inner').slideUp();
        } else {
            jQuery(".accordion a.toggle").next('div.accordion-inner').slideUp();
            jQuery(this).next('div.accordion-inner').slideToggle();
        }
    });
    var coninw = jQuery(".contact-info-wrap"),
        coninbtn = jQuery(".contact-info-btn");
    function showConInfo() {
        coninw.addClass("vis-coninfwrap");
        coninbtn.removeClass("isconin-btn_vis");
    }
    function hideConInfo() {
        coninw.removeClass("vis-coninfwrap");
        coninbtn.addClass("isconin-btn_vis");
    }
    coninbtn.on("click", function () {
        if (jQuery(this).hasClass("isconin-btn_vis")) showConInfo();
        else hideConInfo();
    });
    jQuery(".close_ciw").on("click", function (e) {
        e.preventDefault();
        hideConInfo();
    });
    //   nicescroll ------------------
    jQuery(".proces-details-content-wrap").niceScroll({
        cursorwidth: "2px",
        cursorborder: "none",
        cursorborderradius: "0px",
        cursorcolor: "#F57500",
        zindex: "10",
        background: "rgba(255,255,255,0.1)",
        autohidemode: false,
    });
    jQuery(".hidden-contact_form-wrap_inner").niceScroll({
        cursorwidth: "0",
        cursorborder: "none",
        cursorborderradius: "0px",
    });
    jQuery(".initscroll").niceScroll({
        cursorwidth: "2px",
        cursorborder: "none",
        cursorborderradius: "0px",
        cursorcolor: "#F57500",
        zindex: "2",
        background: "#eee",
        autohidemode: false,
    });
    jQuery(".show-phdc").on("click", function () {
        var pdch = jQuery(this).parent(".process-details").find(".proces-details-content");
        TweenMax.to(pdch, 1.2, {
            force3D: true,
            bottom: 0,
            ease: Expo.easeInOut
        });
    });
    jQuery(".close-hidden_pdc").on("click", function () {
        var pdch = jQuery(this).parents(".process-details").find(".proces-details-content");
        TweenMax.to(pdch, 0.6, {
            force3D: true,

            bottom: "-100%",
            ease: Expo.easeInOut
        });
    });
    var thumbcont = jQuery(".thumbnail-container"),
        thumbItrm = jQuery(".thumb-img"),
        stbtn = jQuery(".show_thumbnails");
    function showThumbnails() {
        TweenMax.to(thumbcont, 1.0, {
            force3D: true,
            top: 0,
            ease: Expo.easeInOut,
            onComplete: function () {
                thumbItrm.addClass("visthumbnails");
                setTimeout(function () {
                    thumbcont.addClass("visthumbnails");
                }, 200);

            }
        });
        stbtn.removeClass("unvisthum");
    }
    function hideThumbnails() {
        thumbcont.removeClass("visthumbnails");
        thumbItrm.removeClass("visthumbnails");
        TweenMax.to(thumbcont, 1.0, {
            force3D: true,
            delay: 0.2,
            top: "100%",
            ease: Expo.easeInOut,
            onComplete: function () {
                TweenMax.to(thumbcont, 0.1, {
                    force3D: true,
                    left: 0,
                    top: "100%",
                    ease: Expo.easeInOut
                });
            }
        });
        stbtn.addClass("unvisthum");
    }
    stbtn.on("click", function () {
        if (jQuery(this).hasClass("unvisthum")) showThumbnails();
        else hideThumbnails();
    });
    function showDetails() {
        jQuery(".det-overlay").fadeIn(400);
        TweenMax.to(jQuery(".hid-det-anim"), 0.8, {
            force3D: true,
            left: "0",
            ease: Expo.easeInOut,
            onComplete: function () {
                TweenMax.to(jQuery(".fix-pr-det-dec2"), 0.5, {
                    force3D: true,
                    width: 0,
                    ease: Expo.easeInOut
                });
                TweenMax.to(jQuery(".fix-pr-det-dec"), 0.8, {
                    force3D: true,
                    delay: 0.2,
                    left: "100%",
                    ease: Expo.easeInOut
                });

            }

        });
        jQuery(".shibtn").removeClass("unvisthum2");
        hideThumbnails();
        jQuery(".fw-carousel-wrap").addClass("viscale");
    }
    function hideDetails() {
        jQuery(".det-overlay").fadeOut(400);
        TweenMax.to(jQuery(".hid-det-anim"), 0.8, {
            force3D: true,
            left: "-900px",
            ease: Expo.easeInOut,
            onComplete: function () {
                TweenMax.to(jQuery(".fix-pr-det-dec2"), 0.1, {
                    force3D: true,
                    width: "150px",
                    ease: Expo.easeInOut
                });
                TweenMax.to(jQuery(".fix-pr-det-dec"), 0.1, {
                    force3D: true,

                    left: "0",
                    ease: Expo.easeInOut
                });
            }
        });
        jQuery(".shibtn").addClass("unvisthum2");
        jQuery(".fw-carousel-wrap").removeClass("viscale");
    }
    jQuery(".shibtn").on("click", function () {
        if (jQuery(this).hasClass("unvisthum2")) showDetails();
        else hideDetails();
    });
    jQuery(".act-closedet").on("click", function () {
        hideDetails();
    });
    function hoverdirInit() {
        jQuery(".horizontal-grid-wrap .portfolio_item  , .gallery-items .gallery-item").each(function () {
            jQuery(this).hoverdir();
        });
    }
    hoverdirInit();
    //   cursor ------------------
    jQuery(".pr-det-container , .column-wrap").on({
        mouseenter: function () {
            jQuery(".element-item").addClass("white_blur");
        },
        mouseleave: function () {
            jQuery(".element-item").removeClass("white_blur");
        }
    });
    jQuery(".column-wrap.dark-bg").on({
        mouseenter: function () {
            jQuery(".element-item").removeClass("white_blur");
        },
        mouseleave: function () {
            jQuery(".element-item").removeClass("white_blur");
        }
    });
    jQuery("a , .btn ,   textarea,   input  , .leaflet-control-zoom , .aside-show_cf , .close-contact_form , .closedet_style ").on({
        mouseenter: function () {
            jQuery(".element-item").addClass("elem_hover");
        },
        mouseleave: function () {
            jQuery(".element-item").removeClass("elem_hover");
        }
    });
    jQuery("  .swiper-slide ,  #portfolio_horizontal_container").on({
        mouseenter: function () {
            jQuery(".element-item").addClass("slider_hover");
        },
        mouseleave: function () {
            jQuery(".element-item").removeClass("slider_hover");
        }
    });
    jQuery(".swiper-slide a , .next-project-swiper-link , #portfolio_horizontal_container a").on({
        mouseenter: function () {
            jQuery(".element-item").removeClass("slider_hover");
        },
        mouseleave: function () {
            jQuery(".element-item").addClass("slider_hover");
        }
    });

    jQuery(".next-project-swiper-link").on({
        mouseenter: function () {
            jQuery(".element-item").addClass("slider_linknext");
        },
        mouseleave: function () {
            jQuery(".element-item").removeClass("slider_linknext");
        }
    });
    jQuery(".nav-overlay , .det-overlay").on({
        mouseenter: function () {
            jQuery(".element-item").addClass("close-icon");
        },
        mouseleave: function () {
            jQuery(".element-item").removeClass("close-icon");
        }
    });
    //   Contact form------------------
    jQuery("#contactform").submit(function () {
        var a = jQuery(this).attr("action");
        jQuery("#message").slideUp(750, function () {
            jQuery("#message").hide();
            jQuery("#submit").attr("disabled", "disabled");
            jQuery.post(a, {
                name: jQuery("#name").val(),
                email: jQuery("#email").val(),
                phone: jQuery("#phone").val(),
                subject: jQuery('#subject').val(),
                comments: jQuery("#comments").val(),
                verify: jQuery('#verify').val()

            }, function (a) {
                document.getElementById("message").innerHTML = a;
                jQuery("#message").slideDown("slow");
                jQuery("#submit").removeAttr("disabled");
                if (null != a.match("success")) jQuery("#contactform").slideDown("slow");
            });
        });
        return false;
    });
    jQuery("#contactform input, #contactform textarea").keyup(function () {
        jQuery("#message").slideUp(1500);
    });
    //  Map------------------
	if (jQuery("#map-single").length > 0) {
		var latlog = jQuery('#map-single').data('latlog'),
			popupTextit = jQuery('#map-single').data('popuptext'),
			map = L.map('map-single').setView(latlog, 15);
		L.tileLayer('//{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png').addTo(map);
		if (jQuery(window).width() > 1024) {
			var offset = map.getSize().x * 0.15;
			map.panBy(new L.Point(-offset, 0), {
				animate: false
			});
		} else {
			var offset = map.getSize().x * 0;
			map.panBy(new L.Point(-offset, 0), {
				animate: false
			});
		}
		var greenIcon = L.icon({
			iconUrl: jQuery('#map-single').data('icon'),
			iconSize: [40, 40],
			popupAnchor: [0, -26]
		});
		L.marker(latlog, {
			icon: greenIcon
		}).addTo(map).bindPopup(popupTextit);
	}

    jQuery(".show_contact-form").on("click", function (e) {
        e.preventDefault();
        jQuery(".content-inner").addClass("vis-con-form");
    });
    jQuery(".close-contact_form").on("click", function () {
        jQuery(".content-inner").removeClass("vis-con-form");
        jQuery("#message").slideUp(500);
        jQuery(".custom-form").find("input[type=text], textarea").val("");
    });
    function videoint() {
        //   Video------------------
        var v = jQuery(".background-youtube-wrapper").data("vid");
        var f = jQuery(".background-youtube-wrapper").data("mv");
        jQuery(".background-youtube-wrapper").YTPlayer({
            fitToBackground: true,
            videoId: v,
            pauseOnScroll: true,
            mute: f,
            callback: function () {
                var a = jQuery(".background-youtube-wrapper").data("ytPlayer").player;
            }
        });
        var w = jQuery(".background-vimeo").data("vim"),
            bvc = jQuery(".background-vimeo"),
            bvmc = jQuery(".media-container"),
            bvfc = jQuery(".background-vimeo iframe "),
            vch = jQuery(".video-container");
        bvc.append('<iframe src="//player.vimeo.com/video/' + w + '?background=1"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>');
        jQuery(".video-holder").height(bvmc.height());
        if (jQuery(window).width() > 1024) {
            if (jQuery(".video-holder").length > 0)
                if (bvmc.height() / 9 * 16 > bvmc.width()) {
                    bvfc.height(bvmc.height()).width(bvmc.height() / 9 * 16);
                    bvfc.css({
                        "margin-left": -1 * jQuery("iframe").width() / 2 + "px",
                        top: "-75px",
                        "margin-top": "0px"
                    });
                } else {
                    bvfc.width(jQuery(window).width()).height(jQuery(window).width() / 16 * 9);
                    bvfc.css({
                        "margin-left": -1 * jQuery("iframe").width() / 2 + "px",
                        "margin-top": -1 * jQuery("iframe").height() / 2 + "px",
                        top: "50%"
                    });
                }
        } else if (jQuery(window).width() < 760) {
            jQuery(".video-holder").height(bvmc.height());
            bvfc.height(bvmc.height());
        } else {
            jQuery(".video-holder").height(bvmc.height());
            bvfc.height(bvmc.height());
        }
        vch.css("width", jQuery(window).width() + "px");
        vch.css("height", Number(720 / 1280 * jQuery(window).width()) + "px");
        if (vch.height() < jQuery(window).height()) {
            vch.css("height", jQuery(window).height() + "px");
            vch.css("width", Number(1280 / 720 * jQuery(window).height()) + "px");
        }
    }
    videoint();
    //   Blog filter ------------------
    jQuery(".blog-btn").on("click", function () {
        jQuery(this).parent(".blog-btn-filter").find("ul").slideToggle(500);
        return false;
    });
    //   mobile filter ------------------
    jQuery(".act-filter").on("click", function () {
        jQuery(".init_hidden_filter").slideToggle(300);
        return false;
    });
    jQuery(".page-scroll-nav_wrap ul li a  , .gallery-filters a").on("click", function () {
        if (jQuery(window).width() < 565) {
            jQuery(".init_hidden_filter").delay(600).slideUp(300);
        }
    });
    //  menu------------------
    jQuery("#menu").menu();
    jQuery(".sliding-menu li a.nav").parent("li").addClass("submen-dec");
    var nbw = jQuery(".nav-button"),
        nh = jQuery(".nav-holder"),
        nhw = jQuery(".nav-holder-wrap"),
        nho = jQuery(".nav-overlay"),
        nhl = jQuery(".nav-holder-wrap_line"),
        nnvw = jQuery("nav.nav-inner"),
        nfw = jQuery(".nav-footer"),
        nhwd = jQuery(".nav-holder-wrap_dec");
    function showMenu() {
        nh.addClass("nh_vis");
        nho.fadeIn(500);
        TweenMax.to(nhwd, 0.6, {
            force3D: true,
            left: 0,
            ease: Expo.easeInOut
        });
        TweenMax.to(nfw, 0.6, {
            force3D: true,
            delay: 0.3,

            bottom: 0,
            ease: Expo.easeInOut
        });
        TweenMax.to(nhl, 1.2, {
            force3D: true,
            delay: 0.3,
            top: 0,
            ease: Expo.easeInOut
        });
        TweenMax.to(nnvw, 0.8, {
            force3D: true,
            opacity: "1",
            x: 0,
            delay: 0.6,
            ease: Expo.easeInOut
        });
        nhw.removeClass("but-hol");
        nbw.addClass("cmenu");
    }
    function hideMenu() {
        TweenMax.to(nhl, 0.3, {
            force3D: true,
            top: "100%",
            ease: Expo.easeInOut,
            onComplete: function () {
                TweenMax.to(nfw, 0.2, {
                    force3D: true,
                    bottom: "-70px",
                    ease: Expo.easeInOut
                });
                TweenMax.to(nnvw, 0.4, {
                    force3D: true,
                    opacity: "0",
                    x: "50px",
                    ease: Expo.easeInOut,
                    onComplete: function () {
                        TweenMax.to(nhwd, 0.4, {
                            force3D: true,
                            left: "100%",
                            ease: Expo.easeInOut
                        });
                        TweenMax.to(jQuery(".nhw-col"), 0.4, {
                            force3D: true,
                            opacity: "0",
                            transform: "  rotateX(80deg)",
                            ease: Expo.easeInOut
                        });
                        nh.removeClass("nh_vis");
                        nho.fadeOut(500);
                    }
                });
            }
        });
        nhw.addClass("but-hol");
        nbw.removeClass("cmenu");
    }
    nbw.on("click", function () {
        if (nhw.hasClass("but-hol")) showMenu();
        else hideMenu();
    });
    nho.on("click", function () {
        hideMenu();
    });
    // Share   ------------------
	var shs = eval(jQuery(".share-container").attr("data-share"));
    jQuery(".share-container").share({
        networks: shs
    });
    var shrcn = jQuery(".share-container"),
        swra = jQuery(".share-wrapper"),
        clsh = jQuery(".close-share-btn"),
        shic = jQuery(".share-icon"),
        ssbtn = jQuery(".showshare");
    function showShare() {
        ssbtn.addClass("uncl-share");
        shrcn.removeClass("isShare");
        TweenMax.to(swra, 0.6, {
            force3D: false,
            width: "225px",
            ease: Expo.easeInOut,
            onComplete: function () {
                TweenMax.to(clsh, 0.4, {
                    force3D: true,
                    right: "0",

                });
                shic.each(function (a) {
                    var boi = jQuery(this);
                    setTimeout(function () {
                        TweenMax.to(boi, 1.0, {
                            force3D: false,
                            opacity: "1"
                        });
                    }, 130 * a);
                });
            }
        });
    }
    function hideShare() {
        ssbtn.removeClass("uncl-share");
        shrcn.addClass("isShare");
        TweenMax.to(jQuery(".share-icon"), 1.0, {
            force3D: false,
            opacity: "0"
        });
        TweenMax.to(clsh, 0.4, {
            force3D: true,
            right: "-75px",
            onComplete: function () {
                TweenMax.to(swra, 0.6, {
                    force3D: false,
                    delay: 0.2,
                    width: "0",
                    ease: Expo.easeInOut
                });
            }
        });
    }
    clsh.on("click", function () {
        hideShare();
    });
    ssbtn.on("click", function () {
        if (jQuery(".share-container").hasClass("isShare")) showShare();
        else hideShare();
    });
	//nice selcet
	jQuery('.chosen-select, .wpcf7-select, td select, .widget select').niceSelect();
}
//   load animation------------------
jQuery("<div class='page-load'><span class='pl-spinner'></span></div>").appendTo("#main");
jQuery.fn.duplicate = function (a, b) {
    var c = [];
    for (var d = 0; d < a; d++) jQuery.merge(c, this.clone(b).get());
    return this.pushStack(c);
};
jQuery("<div class='pl-row'><span class='pl-row-anim'></span><span class='pl-row-anim2'></span></div>").duplicate(4).appendTo(".page-load");
function contentAnimShow() {
    jQuery(".lg-backdrop , .lg-outer").remove();
    jQuery(".nav-button").removeClass("cmenu");
    jQuery(".showshare").removeClass("uncl-share");
    jQuery(".page-load").fadeIn(1);
    jQuery(".pl-row-anim2").each(function (index, element) {
        var tl = new TimelineLite();
        tl.to(element, 0.6, {
            force3D: true,

            right: "0",
            ease: Expo.easeInOut
        }, index * 0.1)
    });
    jQuery(".pl-row-anim").each(function (index, element) {
        var tl = new TimelineLite();
        tl.to(element, 0.8, {
            force3D: true,

            right: "0",
            ease: Expo.easeInOut
        }, index * 0.1)
    });
    TweenMax.to(jQuery(".page-subtitle span"), 0.9, {
        force3D: true,
        y: -50,
        opacity: 0,
        delay: 0.7,
        ease: Power2.easeOut,
        onComplete: function () {
            TweenMax.to(jQuery(".page-subtitle span"), 0.1, {
                force3D: true,
                y: 50
            });
        }
    });
    setTimeout(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, {
            queue: true,
            duration: 10,
        });
    }, 1000);
}
function contentAnimHide() {
    var chdpt = jQuery(".content").data("pagetitle");
    jQuery(".page-subtitle span").text(chdpt);
    TweenMax.to(jQuery(".page-subtitle span"), 0.9, {
        force3D: true,
        y: 0,
        opacity: 1,
        delay: 0.8,
        ease: Power2.easeOut
    });
    jQuery(".page-load").addClass("act_pl");
    jQuery(".pl-spinner").addClass("act-loader");
    setTimeout(function () {
        jQuery(".pl-spinner").removeClass("act-loader");
        jQuery(".page-load").removeClass("act_pl");
        jQuery(".pl-row-anim").each(function (index, element) {
            var tl = new TimelineLite();
            tl.to(element, 0.6, {
                force3D: true,
                left: "100%",
                ease: Expo.easeInOut
            }, index * 0.1)
        });
        jQuery(".pl-row-anim2").each(function (index, element) {
            var tl = new TimelineLite();
            tl.to(element, 0.8, {
                force3D: true,
                left: "100%",
                ease: Expo.easeInOut
            }, index * 0.1)
        });
        setTimeout(function () {
            jQuery(".page-load").fadeOut(1);
            TweenMax.to(jQuery(".pl-row-anim , .pl-row-anim2"), 0.0, {
                force3D: true,
                left: "0",
                right: "100%"
            });

        }, 1200);
    }, 1500);
}

//   Video ------------------
function initvideo() {
    var a = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return a.Android() || a.BlackBerry() || a.iOS() || a.Opera() || a.Windows();
        }
    };
    trueMobile = a.any();
    if (trueMobile) jQuery("  .background-vimeo , .background-youtube-wrapper ").remove();
}
if (jQuery(".element-item").length > 0) {
    var mouse = {
        x: 0,
        y: 0
    };
    var pos = {
        x: 0,
        y: 0
    };
    var ratio = 0.15;
    var active = false;
    var ball = document.querySelector('.element-item');
    TweenLite.set(ball, {
        xPercent: -50,
        yPercent: -50
    });
    document.addEventListener("mousemove", mouseMove);
    function mouseMove(e) {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        mouse.x = e.pageX;
        mouse.y = e.pageY - scrollTop;
    }
    TweenMax.ticker.addEventListener("tick", updatePosition);
    function updatePosition() {
        if (!active) {
            pos.x += (mouse.x - pos.x) * ratio;
            pos.y += (mouse.y - pos.y) * ratio;
            TweenMax.set(ball, {
                x: pos.x,
                y: pos.y
            });
        }
    }
}
document.addEventListener('gesturestart', function (e) {
    e.preventDefault();
});
//   Init Ajax------------------
jQuery(function () {
    jQuery.coretemp({
        reloadbox: "#wrapper",
        outDuration: 700,
        inDuration: 200
    });
    readyFunctions();
    jQuery(document).on({
        ksctbCallback: function () {
            readyFunctions();
        }
    });
});
function initajaxload () {
}
function initMenueffect () {
}
function inittitlereplace () {
}

function initmenuajaxdisable () {
	jQuery(".menu-item-has-children > a").each(function(i){
	jQuery(this).removeClass('ajax');
	})
	jQuery(".menu-item-type-custom > a").each(function(i){
	jQuery(this).removeClass('ajax');
	})
}

function init_zo_el () {
	jQuery("section.elementor-top-section").each(function(i){
	jQuery(this).addClass('scroll_sec');
	})
	var ssl_total = jQuery("section.scroll_sec").length;
    jQuery(".sc_total").text("0" + ssl_total);
}
//   Init All Functions------------------
function readyFunctions() {
    initvideo();
    initZonar();
	initajaxload ();
	inittitlereplace ();
	initmenuajaxdisable ();
	init_zo_el ();
	initMenueffect();
}