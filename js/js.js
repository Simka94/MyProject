$(document).ready(function(){
    
    
    
    
    
    
   ;(function($, document, window, undefined) {

    'use strict';

    var slideAndSwipe =

        $.fn.slideAndSwipe = function(options) {

            var nav = $(this); // get the element to swipe
            var navWidth = -nav.outerWidth();
            var transInitial = navWidth;

            // get settings
            var settings = $.extend({
                triggerOnTouchEnd   : true,
                swipeStatus         : swipeStatus,
                allowPageScroll     : 'vertical',
                threshold           : 100,
                excludedElements    : 'label, button, input, select, textarea, .noSwipe',
                speed               : 250

            }, options );

            nav.swipe(settings);

            /**
             * Catch each phase of the swipe.
             * move : we drag the navigation
             * cancel : open navigation
             * end : close navigation
             */
            function swipeStatus(event, phase, direction, distance) {
                if(phase == 'start') {
                    if(nav.hasClass('ssm-nav-visible')) {
                        transInitial = 0;
                    } else {
                        transInitial = navWidth;
                    }
                }
                var mDistance;

                if (phase == 'move' && (direction == 'left')) {
                    if(transInitial < 0) {

                        mDistance = transInitial - distance;
                    } else {
                        mDistance = -distance;
                    }

                    scrollNav(mDistance, 0);

                } else if (phase == 'move' && direction == 'right') {
                    if(transInitial < 0) {
                        mDistance = transInitial + distance;
                    } else {
                        mDistance = distance;
                    }
                    scrollNav(mDistance, 0);
                } else if (phase == 'cancel' && (direction == 'left') && transInitial === 0) {
                    scrollNav(0, settings.speed);
                } else if (phase == 'end' && (direction == 'left')) {

                       hideNavigation();
                } else if ((phase == 'end' || phase == 'cancel') && (direction == 'right')) {
                    console.log('end');
                }
            }

            /**
             * Browser detect
             */
            function isSafari() {
                return /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
            }

            function isChrome() {
                return /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
            }

            /**
             * Manually update the position of the nav on drag
             */
            function scrollNav(distance, duration) {
                nav.css('transition-duration', (duration / 1000).toFixed(1) + 's');

                if(distance >= 0) {
                    distance = 0;
                }
                if(distance <= navWidth) {
                    distance = navWidth;
                }
                if(isSafari() || isChrome()) {
                   nav.css('-webkit-transform', 'translate(' + distance + 'px,0)');
                }
                else{
                   nav.css('transform', 'translate(' + distance + 'px,0)');
                }
                if(distance == '0') {
                    $('.ssm-toggle-nav').addClass('ssm-nav-visible');
                    $('html').addClass('is-navOpen');
                    $('.ssm-overlay').fadeIn();
                }
            }

            /**
             * Open / close by click on burger icon
             */
            var hideNavigation = (function() {
                nav.removeClass('ssm-nav-visible');
                scrollNav(navWidth, settings.speed);
                $('.close_nav').removeClass('opened');
                $('.nav_overlay').fadeOut();
                $('html').removeClass('is-navOpen');
                $('.ssm-overlay').fadeOut();
            });

            var showNavigation = (function() {
                nav.addClass('ssm-nav-visible');
                $('.close_nav').addClass('opened');
                $('.nav_overlay').fadeIn();
                scrollNav(0, settings.speed);
            });

            $('.ssm-toggle-nav').click(function(e) {
                if(nav.hasClass('ssm-nav-visible')) {
                    hideNavigation();
                }
                else{
                    showNavigation();
                }
                e.preventDefault();
            });
        }
    ;
})(window.jQuery || window.$, document, window);



/*
 * Export as a CommonJS module
 */
if (typeof module !== 'undefined' && module.exports) {
    module.exports = slideAndSwipe;
} 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    if($( window ).width() < 1000){
        $('.navigation_container').slideAndSwipe();
    }
    $.ajax({
        url: "../img/sprite.svg",
        dataType : 'html',
        success: function(data){
            $("body").prepend(data);
        }
    });
    $('.contact_form').submit(function(){
    event.preventDefault();
    var msg = $('.contact_form').serialize();
        $.ajax({
          type: 'POST',
          url: 'mail.php',
          data: msg,
          success: function(data) {
            $('body').prepend(data);
          }
        });
    });
    setTimeout(function(){
    var loader = $('.preloader');
        loader.addClass('close_preloader');
        setTimeout(function(){
            loader.remove();
        },2000);
    },2000);    
    var $root = $('body'),
        nav_link = $('.nav_link');
    $(nav_link).click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });
    var sections = $('.section_container'),
        nav = $('.nav li'),
        animator = $('#animator');
    $(window).on('scroll', function () {
      var cur_pos = $(this).scrollTop();
      sections.each(function() {
        var top = $(this).offset().top - ($(this).outerHeight() / 2),
            bottom = top + $(this).outerHeight();
        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').parent().removeClass('active_anim');
            sections.removeClass('active_anim');
            $(this).addClass('active_anim');
            nav.find('a[href="#'+$(this).attr('id')+'"]').parent().addClass('active_anim');
            if($(this).attr('id') == 'main'){
                $(animator).css({'top':'16px'});
            }else if($(this).attr('id') == 'about'){
                $(animator).css({'top':'63px'});
            }else if($(this).attr('id') == 'portfolio'){
                $(animator).css({'top':'110px'});
            }else if($(this).attr('id') == 'contacts'){
                $(animator).css({'top':'157px'});
            }
        }
      });
    }); 

    
      var map = new google.maps.Map(document.getElementById('g_map'), {
        zoom: 16,
        center: {lat: 50.400727, lng: 30.652490},
        disableDefaultUI: true,
        styles: [
    {
        "featureType": "water",
        "stylers": [
            {
                "saturation": 43
            },
            {
                "lightness": -11
            },
            {
                "hue": "#0088ff"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 99
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#808080"
            },
            {
                "lightness": 54
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ece2d9"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ccdca1"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#767676"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b8cb93"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    }
]
      });

        
}); 