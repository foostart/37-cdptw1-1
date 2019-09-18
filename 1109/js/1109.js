
var swiper = new Swiper('.swiper-container', {
                    loop: true,
                    pagination: '.swiper-pagination',
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    slidesPerView: 1,
                    spaceBetween: 30,
                          pagination: {
                        el: '.swiper-pagination',
                        dynamicBullets: true,
                        clickable: true,
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

// var swiper = new Swiper('.swiper-container', {
//       slidesPerView: 1,
//       spaceBetween: 30,
//       loop: true,
//       pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//       },
//       navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//       },
//     });