var swiper = new Swiper('.swiper', {
    spaceBetween: 15,
    slidesPerView: 'auto',
    autoHeight: false,
    breakpoints: {
        480: {
            spaceBetween: 17,
        },
        1024: {
            spaceBetween: 20,
        },
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});