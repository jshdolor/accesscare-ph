$(document).ready(function () {


    $('#slides').carousel();

    $('#slides button').click(function(){
        var link = $(this).data('link');
        $('.nav a[href="'+link+'"]').trigger('click');
    })

    //this code is for smooth scroll and nav selector
    $(document).ready(function () {
        // this code is for the gmap
        var map = new GMaps({
            el: '#map',
            lat: -12.043333,
            lng: -77.028333,

        });

        $(document).on("scroll", onScroll);

        //smoothscroll
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top + 2
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('.navbar-default .navbar-nav>li>a.onpage').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.navbar-default .navbar-nav>li>a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }


    //this code is for animation nav
    $(window).scroll(function () {
        var windowScrollPosTop = $(window).scrollTop();

        if (windowScrollPosTop >= 150) {
            $(".header").css({
                "background": "#B193DD",
            });
            $(".top-header img.logo").css({
                "margin-top": "-40px",
                "margin-bottom": "0"
            });
            $(".navbar-default").css({
                "margin-top": "-15px",
            });
        } else {
            $(".header").css({
                "background": "transparent",
            });
            $(".top-header img.logo").css({
                "margin-top": "-15px",
                "margin-bottom": "25px"
            });
            $(".navbar-default").css({
                "margin-top": "12px",
                "margin-bottom": "0"
            });

        }
    });




});
