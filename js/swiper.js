var swiper = new Swiper('.swiper', {
    spaceBetween: 15,
    slidesPerView: 'auto',
    autoHeight: false,

    breakpoints: {
        1024: {
            spaceBetween: 20,
        },
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

export default swiper;