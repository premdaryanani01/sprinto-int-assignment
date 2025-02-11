document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".testimonial-slider", {
      loop: true, // Infinite loop
      slidesPerView: 3.5,
      spaceBetween: 20,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
      autoplay: {
          delay: 9000, 
          disableOnInteraction: true,
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1.5,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 3.5,
          spaceBetween: 40
        }
      }
  });
});
