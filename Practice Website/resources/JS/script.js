/* global $ */

/*eslint-env jquery*/


    /* For the sticky nav */
    $('document').ready(function() {

          $('.js--section-features').waypoint(function(direction) {
            if (direction == "down"){
              $('nav').addClass('sticky');
            } else {
                $('nav').removeClass('sticky');
            }
      },{
<<<<<<< HEAD
        offset: -20
=======
        offset: '-20px;'
>>>>>>> d002588636326db546eea5a36741b7eb3f3b95c9
      });
        
    /* Scroll on buttons */
    $('.js--scroll-to-plans').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000); 
    });
        
    $('.js--scroll-to-start').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000); 
    });
        
        
    /* Animation on scroll */
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });
        
    $('.js--wp-2').waypoint(function(direction) {
    $('.js--wp-2').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    });
        
    $('.js--wp-3').waypoint(function(direction) {
    $('.js--wp-3').addClass('animated pulse');
    }, {
        offset: '50%'
    });
        
        
        /* Mobile nav */
    
    $('.js--nav-icon').click(function () {
       var nav =$('.js--main-nav');
       var icon = $('.js--nav-icon i');
        
        nav.slideToggle(200);
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
          
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
        }
     
    });
        
});
