import './bootstrap';

import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Aktifkan modul Swiper
Swiper.use([Navigation, Pagination]);

// Inisialisasi Swiper
document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
        modules: [Navigation, Pagination], // ← Wajib diset sekarang
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
});
