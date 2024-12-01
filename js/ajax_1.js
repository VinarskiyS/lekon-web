// jQuery.noConflict();


$(function(){	




  $('.but_close').on('click', function() {
    $('#cardCont').css({'display':'none'}); 
    $('#cardCont').html().remove();
    });



  let card_id;
  let line_id;

    // скрипт для передачи серверу данных из карточки: 
    
  //  $('.card_back').bind("click", function(event) {
  //     $(this).css({'display':'none'});  
  //   });
    // $('.but_close').on('mousedown click', function() { 
    //   $('#cardCont').css({'display':'none'}); 
    //   });
    
    // function openCard(){
    
    $('.card').bind("click", function(event) {
    
     card_id = this.id;
     line_id = this.title;

    //  alert(card_id + ' ' + line_id);
     ajax({'folder': card_id, 'line_folder': line_id});
   
    });

   

  let $content = $('#cardCont');

    function ajax(data) {
        $.ajax ({
        url: '../php_component/card_path.php',
        // url: '../php_component/card_path.php',
        // url: '../php_component/card_ajax.php',
        // url: '../php_component/card_ajax.php',
        type: "POST",
        data: data,
        // dataType: "text",
        error: error,
        success: success,
        complete: function(){
           $('#cardCont').css({'display':'flex'});  
        }
      });
      }

      function error(){
        alert('ошибка 1');
      }
      function success(result){
        // alert(result);
        // $content.html($(data).hde().fadeIn(400));
        $content.html(result);
      }

    });