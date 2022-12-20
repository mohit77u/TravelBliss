import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

var swiper = new Swiper(".swiper", {
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
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });