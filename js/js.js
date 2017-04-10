$(document).ready(function(){
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
            }else if($(this).attr('id') == 'skills'){
                $(animator).css({'top':'110px'});
            }else if($(this).attr('id') == 'portfolio'){
                $(animator).css({'top':'157px'});
            }else if($(this).attr('id') == 'contacts'){
                $(animator).css({'top':'204px'});
            }
        }
      });
    }); 
    var $typer = $('.main_text'),
        txt = $typer.text(),
        tot = txt.length,
        ch  = 0;
    $typer.text('')
    setTimeout(function(){
    (function typeIt() {   
      if(ch > tot) return;
      $typer.text( txt.substring(0, ch++) );
      setTimeout(typeIt, ~~(Math.random()*(150-60+1)+60));
    }());
    },3200);
    
      var map = new google.maps.Map(document.getElementById('g_map'), {
        zoom: 15,
        center: {lat: 50.400727, lng: 30.652490},
        disableDefaultUI: true,
        styles: [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
                    {
                        "saturation": "-100"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 65
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": "50"
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": "-100"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "all",
                "stylers": [
                    {
                        "lightness": "30"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [
                    {
                        "lightness": "40"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "hue": "#ffff00"
                    },
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -97
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -100
                    }
                ]
            }
        ]
      });
        
}); 