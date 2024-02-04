$(function () {

    // init feather icons
    feather.replace();

    // init tooltip & popovers
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    //page scroll
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 1000);
        event.preventDefault();
    });

    //toggle scroll menu
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        //adjust menu background
        if (scroll >= 100) {
            $('.sticky-navigation').addClass('navbar-shadow');
        } else {
            $('.sticky-navigation').removeClass('navbar-shadow');
        }
        
        // adjust scroll to top
        if (scroll >= 600) {
            $('.scroll-top').addClass('active');
        } else {
            $('.scroll-top').removeClass('active');
        }
        return false;
    });

    // scroll top top
    $('.scroll-top').click(function () {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1000);
    });

    document.addEventListener('DOMContentLoaded', function() {
        const langToggle = document.querySelector('.nav-process');
    
        langToggle.addEventListener('click', function() {
            const currentLang = document.documentElement.lang;
            const targetLang = currentLang === 'en' ? 'ta' : 'en';
    
            window.location.href = `/language/${targetLang}`;
        });
    });
});

