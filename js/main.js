

// jQuery.noConflict();




$(function(){	




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