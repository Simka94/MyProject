$(document).ready(function(){
    $('.navigation_container').slideAndSwipe();
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