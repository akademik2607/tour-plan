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
