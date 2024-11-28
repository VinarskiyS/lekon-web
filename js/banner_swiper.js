// БАННЕР









const slider_2 = document.querySelector('.swiper-container_2');

let swiper_2 = new Swiper(slider_2, {
    slidesPerView: 1, 
    spaceBetween: 0, // расстояние между слайдами
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        // type: 'fraction',
        clickable: true,
    },
    autoplay: {
        delay: 4000,
    },
   slideToClickedSlide: true, // перекл. по клике на слайд если slidesPerView:>1
   //centeredSlides: true,

   loop: true,  // зацикленный слайдер
   navigation: {
   nextEl: '.swiper-button-next_2',
   prevEl: '.swiper-button-prev_2',
    },
});