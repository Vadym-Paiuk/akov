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

    AOS.init();

    function initDisableMasonry() {
        let msnry;

        let box = document.querySelector('.grid')
        if(!box) return;
        let boxItems = document.querySelectorAll('.grid-item');
        let itemWidth = box.offsetWidth / 4 - 70;
        if (window.innerWidth < 1023.98 && document.querySelector('.grid')) {
            if (msnry) {
                msnry.destroy();
                msnry = null;

            }
        } else if (window.innerWidth > 1023.98 && document.querySelector('.grid')) {
            let seItemsWidth = function () {
                boxItems.forEach((item, index) => {
                    if (index === 0 || index % 3 === 0) {
                        item.style.width = `${box.offsetWidth / 2 - 70}px`;
                    } else {
                        item.style.width = `${box.offsetWidth / 4 - 70}px`;

                    }
                })
            }
            seItemsWidth();
            msnry = new Masonry('.grid', {
                itemSelector: '.grid-item',
                columnWidth: itemWidth,
                fitWidth: true,
                resize: false,
                gutter: 70,
                transitionDuration: '0.8s'
            });
        }
    }
    initDisableMasonry();

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


    $(window).on('resize', function () {
        initDisableMasonry();

    });
});
