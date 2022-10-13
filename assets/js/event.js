/* gallery  */
var galleryTop = new Swiper(".gallery", {
  spaceBetween: 5,
  grabCursor: true,
  slidesPerView: "auto",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  touchRatio: 0.4,
  slideToClickedSlide: true,
  loop: true,
  loopedSlides: 4,
  slideToClickedSlide: true,
  autoplay: {
    delay: 2000,
  },
  // other parameters
  on: {
    click: function () {
      /* do something */
    },
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

galleryTop.controller.control = galleryTop;
