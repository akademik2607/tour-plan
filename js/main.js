const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider--next',
    prevEl: '.hotel-slider--prev',
  },
  keyboard: {
    enabled: true,
    pageUpDown: true,
  },

});
