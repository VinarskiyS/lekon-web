

// jQuery.noConflict();




$(function(){	


    
    
    
    // скрипт для передачи серверу данных из карточки: 
    
    
    
    // function openCard(){
    
    
    $('.card').bind("click", function(event) {
    
      const card_id = event.target.id;
      const line_id = event.target.title;
    
    //   alert(card_id + ' ' + line_id);
    
    //   $('.card_back').css({'display':'flex'});  
    
    //   ajax({ 'line_folder': line_id, 'folder': card_id });
    ajax({ 'folder': 1 });
    



    });
    
    // }
    
    // openCard();
    
    
    // function initialCard (func_1, callback){
    //   func_1(); callback();
    
    // };
    
    
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
    
    
  
    
    function error(){
      alert ('ошибка при загрузке данных!');
    }
    function success(result){
      alert (result);
    }
    
    
    
    
    });


    function ajax(data) {
        $.ajax ({
        url: '../php_component/ajax_test_1.php',
        type: "POST",
        data: data,
        dataType: "text",
        error: error,
        success: success
      });
      }