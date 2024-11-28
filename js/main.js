

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
$('.but_close').on('mousedown click', function() {

  $('.card_back').css({'display':'none'}); 

  

  });



  // $('.card').on('mousedown click', function() {

  //   $('.card_back').css({'display':'flex'});  
  //   });





// скрипт для передачи серверу данных из карточки: 



function openCard(){


$('.card').bind("click", function(event) {

  const card_id = event.target.id;
  const line_id = event.target.title;

  // alert(card_id + ' ' + line_id);

  $('.card_back').css({'display':'flex'});  

  // ajax({
  //   'line_folder': line_id,
  //   'folder': card_id,

  // });

});

}

openCard();


// function initialCard (func_1, callback){
//   func_1(); callback();

// }


// $('.card_back').bind("click", function(event) {

//   $(this).css({'display':'none'});  

// });

// function cloceCard(){
// $(document).click(function() {
//   var container = $(".theCard");
//   if (!container.is(event.target) && !container.has(event.target).length) {
//       container.css({'display':'none'});
//   }
// });
// } 

// initialCard(openCard, cloceCard);




function ajax(data) {
$.ajax ({
  url: '../php_component/card.php',
  method: "POST",
  data: data,
  dataType: "text",
  error: error,
  success: success
  
});
}

function error(){
  alert ('ошибка при загрузке данных!');
}
function success(result){
  alert (result);
}










});