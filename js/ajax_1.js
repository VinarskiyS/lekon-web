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

    //  alert(card_id + ' ' + line_id);
     ajax({'folder': card_id, 'line_folder': line_id});
   
  });

   

  let $content = $('#cardCont');

    function ajax(data) {
        $.ajax ({
        url: '../php_component/card_path.php',
        type: "POST",
        data: data,
        // dataType: "text",
        error: error,
        success: success,
        complete: function(){


// Slider IN CARD
    const slider_main = document.querySelector('.slider-main');
    const slider_nav = document.querySelector('.slider-nav');
          
          let mySwiperNav = new Swiper(slider_nav, {
              slidesPerView: 8, 
              spaceBetween: 5,
              // loopSlides: 5,
              // freeMode: true,
              // loop: true,
              // direction: 'vertical',
              direction: 'horizontal',
          });
          
          let mySwiper = new Swiper(slider_main, {
          
            brakpoints: {
              480: {
                slidesPerView: 1.3,
                spaceBetween: 5,
              }
            },



              // direction: "vertical",
              // direction: 'horizontal',
              spaceBetween: 5,
              pagination: {
                  el: '.swiper-pagination-card', 
                  type: 'fraction',
                  clickable: true,
              },
          
              // effect: "fade",
              // navigation:{
              //     prevEl: '.swiper-button-prev', 
              //     nextEl: '.swiper-button-next', 
              // },
          
              navigation:{
                  prevEl: '.swiper-btn-prev',
                  nextEl: '.swiper-btn-next',
              },
          
              crossFade: true,
              thumbs: {
              swiper: mySwiperNav,
              },
    
              observer: true,
 
         




          });

        //  let thumb = document.querySelectorAll('.slider-nav.swiper-slide');
        //   thumb.forEach((el) => el.addEventListener('mouseenter', function() {
        //     mySwiper.slideTo(el.dataset.swiperSlideIndex) }));


          //  $('#body').toggleClass('blur');
           $('#cardCont').css({'display':'flex'});
           $('#body').css({'overflow-y':'hidden'}); // заморозка фона при открытой карточке
          

           function go_func(e) {
            $('#body').css({'overflow-y':'visible'});
            $('#cardCont').css({'display':'none'}); 
            $('#cardCont').html().remove();

          }

           $('.cl-btn-card').on('click', go_func);
          

           $(document).click(function (e) {
            if ($(e.target).closest(".theCard").length) {
                // клик внутри элемента
                return;
            }
            go_func();
            // клик снаружи элемента
            $(".theCard").fadeOut();
        });




          //  $('#cardCont').not('children').on('click', go_func);

            // if(('#cardCont').on('mouseenter') && !(('.but_close').on('mouseenter'))){
            //   go_func();
            // };


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