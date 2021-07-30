$(document).ready(function(){
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

    let menuButton = document.querySelector('.menu-button');

    menuButton.addEventListener('click', () => {
        document.querySelector('.navbar').classList.toggle('navbar--mobile_visible');    
    });


    //модальное окно
    let modalButton = $('[data-type=modal]');
    let close = $('.modal__close');
    modalButton.on('click', function(){
        let modalOverlay = $('.modal__overlay'),
            modalDialog = $('.modal__dialog');
        modalOverlay.addClass('modal__overlay--visible');
        modalDialog.addClass('modal__dialog--visible');
    });

    close.on('click', function(event){
        event.preventDefault();
        let modalOverlay = $('.modal__overlay'),
            modalDialog = $('.modal__dialog');
        modalOverlay.removeClass('modal__overlay--visible');
        modalDialog.removeClass('modal__dialog--visible');
    });
    $(document).keydown(function(event){
        if(event.code === 'Escape'){
            let modalOverlay = $('.modal__overlay'),
                modalDialog = $('.modal__dialog');
            modalOverlay.removeClass('modal__overlay--visible');
            modalDialog.removeClass('modal__dialog--visible');
        }
    });

    //валидация форм
    $(".form").each(function(){
        $(this).validate({
          messages: {
            name: {
                required:"Please specify your name",
            },
            phone: {
                required:"Please specify your phone",
            },
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            }
          }
        }); 
    });
    jQuery(function($){
        $.mask.definitions['~']='[+-]';
        $("[type=tel]").mask("~9 (999) 999-9999", {placeholder: "+7 (___) ___-____"});
    });
});

