
var swiper = new Swiper('.swiper-container', {
  loop: true,
  slidesPerView: 1, 
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    960: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

  } 
});

