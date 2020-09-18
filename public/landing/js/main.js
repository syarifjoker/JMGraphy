$(function() {

    'use strict';

    // loader
    $("#loader-wrapper").fadeOut();

    // smooth scroll
    $(".nav a").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({

                scrollTop: $(hash).offset().top

            }, 850, function() {

                window.location.hash = hash;

            });

        }

    });

    // hide navbar on mobile after click
    $('.nav a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    // navbar on scroll
    $(window).on('scroll', function() {

        if ($(document).scrollTop() > 50) {

            $(".navbar-fixed-top").css({
                "background-color": "#fff",
                "box-shadow": "0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2)"
            });

            $(".navbar-brand").css({
                "color": "#333"
            });

            $(".navbar-nav li a").css({
                "color": "#555"
            });


            $(".navbar-default .navbar-toggle i").css({
                "color": "#333"
            });

        } else {

            $(".navbar-fixed-top").css({
                "background-color": "transparent",
                "transition": ".5s ease-out",
                "box-shadow": "none"
            });

            $("a.navbar-brand").css({
                "color": "#fff"
            });


            $(".navbar-nav li a").css({
                "color": "#fff"
            });
            

            $(".navbar-default .navbar-toggle i").css({
                "color": "#fff"
            });

        }

    });  

    // screenshot
    $('.shots').owlCarousel({
        itemsMobile: [360, 1],
        items: 1,
        loop: true,
        animateIn: 'slideInDown',
        animateOut: 'flipOutX',
        dots: false,
        mouseDrag: false,
        touchDrag: false,
        nav: true,

        responsiveClass: true,
        responsive:{
        0:{
          items:1,
          nav:true
        },

        482:{
          items:1,
          nav:true
        }
      }

    })


});