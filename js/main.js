

// jQuery.noConflict();




$(function(){	





  $(document).ready(function(){
    let header = $('.header_h1');
    // let headDescriptor = $('.head_descriptor').css('opacity');
    let logo = $('.logo_h1');
        scrollPrev = 0;
    
    $(window).scroll(function() {
      var scrolled = $(window).scrollTop();
     
      if ( scrolled > 60 ) {
        header.addClass('header_h2');
        // headNav.addClass('nav_w');
        $('.head_descriptor').css('opacity', '0%');
        $('header li').css('height', '64%');
        logo.addClass('logo_h2');
  
      } else {
        header.removeClass('header_h2');
        $('.head_descriptor').css('opacity', '64%');
        $('header li').css('height', '56%');
        logo.removeClass('logo_h2');
      }
      scrollPrev = scrolled;
    });
  });	













// свойста для превьюшек карт

$('.card').on('mouseover mousemove', function() {
// $(this).css({'top':'-3px'}); 
//  $(this).css({'background-size':'120%'}); 
$(this).addClass('shadow_on');
$(this).children().children('span').css({'opacity': '100','top':'-40%'});
});


$('.card').on('mouseout', function() {
// $(this).css({'top':'0px'});  
// $(this).css({'background-size':'100%'}); 
$(this).removeClass('shadow_on');  
$(this).children().children('span').css({'opacity': '0','top':'-30%'});
});

$('.card').on('mousedown click', function() {
  // $(this).css({'background-size':'100%'}); 
  $(this).css({'top':'0'});  
  });



// скрипт для карточек товара


// кнопка закрытия карточки
// $('.but_close').on('mousedown click', function() {
//   $('.card_back').css({'display':'none'}); 
//   });








  // $('.but_close').bind("click", function(e) {
    
  //   $('.card_bg').css({'display':'none'}); 
  
  //  });





});