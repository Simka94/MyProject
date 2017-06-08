$(window).on('scroll',function(){
    var offset_top = $(document).scrollTop(),
        parallax = $('.main_text');
    parallax.css({'transform': 'translateY('+offset_top / 2.2+'px)'})
})


$('.nav_link').on('click',function(event) {
    var root = $('html, body');
    event.preventDefault();
    root.stop().animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 700);
});
setTimeout(function(){
    var loader = $('#preloader');
    loader.addClass('close_preloader');
    setTimeout(function(){
        loader.remove();
    },2000);
    $('body').removeClass('overflow_body');
},2000);
$.ajax({
    url: "../img/sprite.svg",
    dataType : 'html',
    success: function(data){
        $('body').prepend(data);
    }
});
var myLatLng = {lat: 50.412405, lng: 30.650252},
    image = 'http://simka.esy.es/img/pin.png',
    map = new google.maps.Map(document.getElementById('g_map'), {zoom: 17,center: myLatLng,disableDefaultUI: true,styles: [{"stylers": [{"hue": "#ff1a00"},{"invert_lightness": true},{"saturation": -100},{"lightness": 33},{"gamma": 0.5}]},{"featureType": "all","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "geometry","stylers": [{"color": "#2D333C"}]}]}),
    marker = new google.maps.Marker({position: myLatLng,map: map,icon: image});
$('#valid_name').unbind().blur( function(){ 
    var val = $(this).val(),
        rv_name = /^[a-zA-Zа-яА-Я]+$/;
    if(val.length > 2 && val != '' && rv_name.test(val)){
        $(this).removeClass('error').addClass('not_error');
    }else{
        $(this).removeClass('not_error').addClass('error');
    }        
});
$('#valid_mail').unbind().blur( function(){ 
    var val = $(this).val(),
        rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if(val != '' && rv_email.test(val)){
        $(this).removeClass('error').addClass('not_error');
    }else{
        $(this).removeClass('not_error').addClass('error');
    } 
});
$('.contact_form').submit(function(event){
    event.preventDefault();
    if($('.not_error').length == 2){
        setTimeout(function(){
            $('.form_loader').fadeIn();
        },600);
        $(this).fadeTo('slow', 0);
        var msg = $('.contact_form').serialize();
            $.ajax({
              type: 'POST',
              url: 'mail.php',
              data: msg,
              success: function(data) {
                $('#valid_name,#valid_mail').removeClass('not_error error');
                setTimeout(function(){
                    $('.contact_form')[0].reset();
                    $('.form_loader').fadeOut();
                },2000);
                setTimeout(function(){
                  $('.msg').text(data);  
                },2600)
                setTimeout(function(){
                    $('.msg').text('');
                    $('.contact_form').fadeTo('slow', 1);
                },5000);
              }
            });
        }else{
            $('#valid_name,#valid_mail').addClass('error');
        }
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
            animator.css({'top':'16px'});
        }else if($(this).attr('id') == 'about'){
            animator.css({'top':'62px'});
        }else if($(this).attr('id') == 'portfolio'){
            animator.css({'top':'110px'});
        }else if($(this).attr('id') == 'contacts'){
            animator.css({'top':'157px'});
        }
    }
  });
});
$('.close_nav').on('click', function(){
    var nav_cont = $('.navigation_container'),
        close_btn = $('.close_nav'),
        root = $('body');
    close_btn.toggleClass('opened');
    nav_cont.toggleClass('open_container');
    root.toggleClass('overflow');
    $(document).click(function(event) {
        if ($(event.target).closest(".close_nav,.navigation_container").length) return;
            close_btn.removeClass('opened');
            root.removeClass('overflow');
            nav_cont.removeClass('open_container');
        event.stopPropagation();
    });
});