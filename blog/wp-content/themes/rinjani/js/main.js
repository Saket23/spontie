(function($) {

  'use strict';

var screenWidth = $(window).width();

/*-----------------------------------------------------------------------------------*/
/*  Mobile Menu
/*-----------------------------------------------------------------------------------*/

if (screenWidth < 992) {
    $(document).on('click', '.menus li.menu-item-has-children', function() {
        $(this).find('.sub-menu').toggleClass('active');
    });
}

$(document).ready(function() {
    $('.mobile-menu').click(function() {
        $('.site-main-menu .menu').toggleClass('expand');
    });

    /*-----------------------------------------------------------------------------------*/
    /*  Custom added
    /*-----------------------------------------------------------------------------------*/

    // Header Mobile Navigation
    $('.mobile-toggle').click(function() {
        if ($('header').hasClass('open-nav')) {
            $('header').removeClass('open-nav');
        } else {
            $('header').addClass('open-nav');
        }
    });
    $('nav.menu li a').click(function() {
        if ($('header').hasClass('open-nav')) {
            $('header').removeClass('open-nav');
        }
    });

    $('footer .goto').on('click', function (event) {
        var $this = $(this);

        var id = $this.attr("href");
        var offset = 0;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 1000);
        event.preventDefault();
    });
});

/*-----------------------------------------------------------------------------------*/
/*  Initialize
/*-----------------------------------------------------------------------------------*/  
  
    $('.flex-wrapper .flexslider').flexslider( {
        slideshow : false,
        selector: ".slides > div", 
        animation : 'fade',
        directionNav: true,
        controlNav: false,

    });
    
    /*-----------------------------------------------------------------------------------*/
    /*  Search Bar
    /*-----------------------------------------------------------------------------------*/

    new UISearch( document.getElementById( 'sb-search' ) );

    $(document).ready(function() {

        $('.sb-search').click(function() {

            $('.site-header-social').toggleClass('move');

        });

    });

    /*-----------------------------------------------------------------------------------*/
    /*  Social Search
    /*-----------------------------------------------------------------------------------*/

    $(document).on('hover', '.post-share', function() {
        $(this).find('.social-share').toggleClass('active');
    });


    /*-----------------------------------------------------------------------------------*/
    /*  Contact Map
    /*-----------------------------------------------------------------------------------*/


    if (screenWidth > 768) {
    var contentContact = $('.wrapper').height();
        $(".acf-map").css('height', contentContact );
    }

})( jQuery );