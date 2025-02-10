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
          delay: 9000, // Auto-slide every 4 seconds
          disableOnInteraction: true,
      },
  });
});
