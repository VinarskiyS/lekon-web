// jQuery.noConflict();


$(function(){	

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

     alert(card_id + ' ' + line_id);
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




    const slider_main = document.querySelector('.slider-main');
    const slider_nav = document.querySelector('.slider-nav');
          
          let mySwiperNav = new Swiper(slider_nav, {
              slidesPerView: 8, 
              spaceBetween: 5,
              // loopSlides: 5,
              // freeMode: true,
              // loop: true,
              direction: 'vertical',
              // direction: 'horizontal',
          
          
          });
          
          let mySwiper = new Swiper(slider_main, {
          
              // direction: "vertical",
              direction: 'horizontal',
              spaceBetween: 5,
              pagination: {
                  el: '.swiper-pagination-card', 
                  type: 'fraction',
                  clickable: true,
              },
          
              effect: "fade",
              // effect: "flip",
              // loopSlides: 5,
              // loop: true,
              // navigation:{
              //     prevEl: '.swiper-button-prev', 
              //     nextEl: '.swiper-button-next', 
              // },
          
              navigation:{
                  prevEl: '.swiper-button-up',
                  nextEl: '.swiper-button-down',
              },
          
              crossFade: true,
              thumbs: {
              swiper: mySwiperNav,
              },
    
              observer: true,
          
          });

           $('#cardCont').css({'display':'flex'});  

           $('.but_close').on('click', function() {
            $('#cardCont').css({'display':'none'}); 
            $('#cardCont').html().remove();
            });

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