import Swiper, { Navigation, Autoplay } from 'swiper';
import 'swiper/css';

// explore slider
var swiper = new Swiper(".explore", {
    modules: [Navigation, Autoplay],
    loop: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".next-slide",
        prevEl: ".prev-slide",
    },
    breakpoints: {
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });

  // discover slider
  var swiper = new Swiper(".packages", {
    modules: [Navigation, Autoplay],
    loop: true,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".next-slide",
        prevEl: ".prev-slide",
    },
    breakpoints: {
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });

// news slider
var swiper = new Swiper(".news", {
  modules: [Navigation, Autoplay],
    loop: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
  },
  navigation: {
      nextEl: ".next-slide",
      prevEl: ".prev-slide",
  },
  breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});

// news slider
var swiper = new Swiper(".image-slider", {
  modules: [Navigation, Autoplay],
  loop: true,
  autoplay: true,
  navigation: {
      nextEl: ".next-slide",
      prevEl: ".prev-slide",
  },
  breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
  },
});