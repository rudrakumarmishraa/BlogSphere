<footer id="mt_footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyright text-left">
                        <p>&copy; BlogSphere. 2024 All Rights Reserved </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social_icons pull-right">
                        <a href="https://www.facebook.com" title="Facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.behance.net" title="Behance" target="_blank"><i class="fa-brands fa-behance"></i></a>
                        <a href="https://in.linkedin.com" title="LinkedIn+" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://pinterest.com" title="Pinterest" target="_blank"><i class="fa-brands fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <p style="color: #777;">&nbsp; &nbsp; Are you an <a style="font-weight: 700; color: #000;" href="adminpage.php">Admin</a></p>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.1/typed.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/2.2.0/jquery.nav.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script>
    "use strict";
    jQuery(document).ready(function () {
        //CACHE JQUERY OBJECTS
        var $window = $(window);
        $window.on('load', function () {
            $(".loading-text").fadeOut();
            $(".loading").delay(10).fadeOut("slow");
            $(".grid-masonry").masonry({
                // options...
                itemSelector: ".grid-item",
                columnWidth: ".grid-item",
            });
            new WOW().init();
        });
        if ($window.width() > 767) {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown(200);
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp(200);
                    $(this).toggleClass('open');
                }
            );
        }
        $window.on('scroll', function () {

            if ($(".navbar-default").add(".navbar-inverse").offset().top > 50) {
                $(".reveal-menu-home").addClass("sticky-nav");
                $(".reveal-menu-blog").addClass("sticky-nav-white");
            } else {
                $(".reveal-menu-home").removeClass("sticky-nav");
                $(".reveal-menu-blog").removeClass("sticky-nav-white");
            }
        });
        $window.on('resize', function () {
            var bodyheight = $(this).height();
            $("#mt_banner").height(bodyheight);
        }).resize();
        var interleaveOffset = 0.5;
        var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                progress: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function (speed) {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                    }
                }
            }
        };
        var swiper = new Swiper(".swiper-container", swiperOptions);
        var mt_personal = window.mt_personal || {},
            $win = $(window);
        mt_personal.Isotope = function () {
            var isotopeContainer = $(".isotopeContainer");
            if (!isotopeContainer.length || !jQuery().isotope) return;
            $win.load(function () {
                isotopeContainer.isotope({
                    itemSelector: ".isotopeSelector"
                });
                $(".mt_filter").on("click", "a", function (e) {
                    e.preventDefault();
                    $(".mt_filter ul li").find(".active").removeClass("active");
                    $(this).addClass("active");
                    var filterValue = $(this).attr("data-filter");
                    isotopeContainer.isotope({ filter: filterValue });
                    e.preventDefault();
                });
            });

        };
        mt_personal.Isotope();
        var progress_way = $('.mt_skill-progress');
        if (progress_way.length > 0) {
            progress_way.waypoint(function () {
                jQuery('.mt_skill-bar').each(function () {
                    jQuery(this).find('.progress-content').animate({
                        width: jQuery(this).attr('data-percentage')
                    }, 2000);
                    jQuery(this).find('.progress-mark').animate({
                        left: jQuery(this).attr('data-percentage')
                    }, {
                        duration: 2150,
                        step: function (now, fx) {
                            var data = Math.round(now);
                            jQuery(this).find('.percent').html(data + '%');
                        }
                    });
                });
            }, {
                offset: '90%'
            });
        }
        $(".main-nav").onePageNav({
            currentClass: "active",
            changeHash: true,
            scrollSpeed: 1000,
            scrollThreshold: 0.5,
            filter: "",
            easing: "swing",
            begin: function () {},
            end: function () {},
            scrollChange: function ($currentListItem) {}
        });
        $('a[href*=#]:not([href=#])').on('click', function (e) {
            e.preventDefault();
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                if (target.length) {
                    $('html,body').stop().animate(
                        {
                            scrollTop: target.offset().top - 80
                        }, 1000);
                    return false;
                }
            }
        });
       cYB = $('.fancybox');
        FancYB.fancybox({
            openEffect: 'fade',
            closeEffect: 'fade',
            padding: 0,
            closeBtn: true,
            helpers: {
                title: {
                    type: 'inside'
                },
                overlay: {
                    locked: false
                },
                buttons: {}
            }
        });
        FancYB.attr('rel', 'gallery');
        $("#mt_client .owl-carousel").owlCarousel({
            loop: false,
            margin: 24,
            autoplay: false,
            autoplayHoverPause: true,
            autoplaySpeed: 1000,
            dot: true,
            smartSpeed: 850,
            responsive: {
                0: {
                    items: 1,
                    dots: true
                },
                600: {
                    items: 3,
                    dots: true
                },
                1000: {
                    items: 5,
                    dots: true
                },
                1201: {
                    items: 5,
                    dots: true
                }
            }
        });
        $("#mt_team .owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplaySpeed: 1000,
            smartSpeed: 850,
            responsive: {
                0: {
                    items: 1,
                    dots: true
                },
                450: {
                    items: 2,
                    dots: true
                },
                500: {
                    items: 2,
                    dots: true
                },
                600: {
                    items: 2,
                    dots: true
                },
                1000: {
                    items: 4,
                    dots: true
                },
                1201: {
                    items: 4,
                    dots: true
                }
            }
        });
        $("#mt_testimonial .owl-carousel").owlCarousel({
            loop: false,
            margin: 24,
            autoplay: false,
            autoplayHoverPause: true,
            autoplaySpeed: 1000,
            dot: true,
            smartSpeed: 850,
            responsive: {
                0: {
                    items: 1,
                    dots: true
                },
                600: {
                    items: 1,
                    dots: true
                },
                1000: {
                    items: 3,
                    dots: true
                },
                1201: {
                    items: 3,
                    dots: true
                }
            }
        });
        $(".project_gallery .owl-carousel").owlCarousel({
            center: true,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsiveBaseElement: window,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true
                },
                1201: {
                    items: 2,
                    nav: true
                }
            }
        });
        $(".portfolio_gallery .owl-carousel").owlCarousel({
            center: true,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsiveBaseElement: window,
            responsiveClass: true,
            navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                },
                1201: {
                    items: 1,
                    nav: true
                }
            }
        });
    });
</script>
<?php
$conn->close();
?>
</html>