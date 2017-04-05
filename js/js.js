$(document).ready(function(){
    setTimeout(function(){
    var loader = $('.preloader');
        loader.addClass('close_preloader');
        setTimeout(function(){
            loader.remove();
        },2000);
    },2000);    
    
    var $root = $('body');
    $('.nav_link').click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });
    
    var sections = $('.section_container'),
      nav = $('.nav li');

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
                $('#animator').css({'top':'16px'});
            }else if($(this).attr('id') == 'about'){
                $('#animator').css({'top':'63px'});
            }else if($(this).attr('id') == 'skills'){
                $('#animator').css({'top':'110px'});
            }else if($(this).attr('id') == 'portfolio'){
                $('#animator').css({'top':'157px'});
            }else if($(this).attr('id') == 'contacts'){
                $('#animator').css({'top':'204px'});
            }
        }
      });
    });
    
    
    
}); 