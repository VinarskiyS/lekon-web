






// СЛАЙДЕР С ПРИВЬЮШКАМИ

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




