import Global from "../../global/global";

// import Swiper, { EffectCards, Navigation, Pagination } from "swiper";

class HomePage {
    constructor() {
        this.global = Global;
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }
        return this.instance;
    }
}

$(function () {
    HomePage.getInstance();

    /*AOS.init({
        easing: 'ease-out-quart',
        duration: 1000,
        once: true // Ensures animations happen only once
    });*/

    function initSlider() {
        if (!document.querySelector('.swiper')) return;


        const mobileSliders = document.querySelectorAll('.projects-grid__slider');

        mobileSliders.forEach((slider, index) => {
            let cardsMobileSlider;


            const breakpoint = window.matchMedia('(min-width:1023.98px)');

            function breakpointChecker() {
                if (breakpoint.matches === true) {
                    console.log('destory');
                    if (cardsMobileSlider !== undefined) cardsMobileSlider.destroy(true, true);
                    return;
                } else if (breakpoint.matches === false) {
                    console.log('enable');

                    return enableSwiper();
                }
            };

            function enableSwiper() {
                cardsMobileSlider = new Swiper(slider, {
                    observer: true,
                    observeParents: true,
                    watchOverflow: true,
                    speed: 500,
                    slidesPerView: 2,
                    spaceBetween: 16,
                    centerSlides: true,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                    },
                    breakpoints: {
                        260: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },
                        767.98: {
                            slidesPerView: 2,
                            spaceBetween: 32,
                        },

                    }
                });
            }

            breakpoint.addEventListener("change", breakpointChecker);
            breakpointChecker();
        })
    }

    initSlider();

});
