const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider-button--next',
    prevEl: '.hotel-slider-button--prev',
  },
  keyboard: {
    enabled: true,
    pageUpDown: true,
  },

});

const rewies = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider-button--next',
    prevEl: '.reviews-slider-button--prev',
  },
  keyboard: {
    enabled: true,
    pageUpDown: true,
  },

});


$(window).scroll(function(){
  $('.newsletter').bgscroll({
    direction: 'bottom', // направление bottom или top
    bgpositionx: 50, // x позиция фонового изображения, от 0 до 100, размерность в %, 50 - означает по центру
    debug: false, // Режим отладки
    min:0, // минимальное положение (в %) на которое может смещаться фон
    max:100 // максимальное положение (в %) на которое может смещаться фон
  });
});
