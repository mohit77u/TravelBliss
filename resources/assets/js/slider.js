import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// explore slider
var swiper = new Swiper(".explore", {
    modules: [Navigation],
    loop: true,
    // delay: 4500,
    // autoplay: {
    //     delay: 4500,
    //     disableOnInteraction: false,
    // },
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
  var swiper = new Swiper(".discover", {
    modules: [Navigation],
    loop: true,
    // delay: 4500,
    // autoplay: {
    //     delay: 4500,
    //     disableOnInteraction: false,
    // },
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

// news slider
var swiper = new Swiper(".news", {
  modules: [Navigation],
  loop: false,
  // delay: 4500,
  // autoplay: {
  //     delay: 4500,
  //     disableOnInteraction: false,
  // },
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