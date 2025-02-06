import "jquery-nice-select";
import "jquery-timepicker/jquery.timepicker";

class Global {
    constructor() {
        this.loader();
        this.dropdown();
        this.mobileMenu();
        this.pricingTabs();
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }

        return this.instance;
    }

    pricingTabs() {
        $(document).on('click', '.pricing-page__per-project__tabs-header-title', function (e) {
            e.preventDefault();

            if ($(this).hasClass('hidden')) {
                return false;
            }

            if ($(this).hasClass('active')) {
                return false;
            }

            let index = $(this).index(); // Get the index of the clicked tab

            // Remove 'active' class from all titles and tabs
            $('.pricing-page__per-project__tabs-header-title').removeClass('active');
            $('.pricing-page__per-project__tabs-body__tab').removeClass('active');

            // Add 'active' class to the clicked title and the corresponding tab
            $('.pricing-page__per-project__tabs-body__tab').eq(index).addClass('active');
            $(this).addClass('active');
        });
    }


    dropdown() {
        $(document).on('click', '.toggle-dropdown', function (e) {
            e.preventDefault()

            let $btn = $(this),
                $parent = $btn.parent(),
                $dropdown = $parent.find('.dropdown')

            $btn.toggleClass('active')
            $dropdown.slideToggle()

            $('.dropdown').not($dropdown).slideUp();
            $('.toggle-dropdown').not($btn).removeClass('active');
        })

        $(document).on('click', function (event) {
            $('.toggle-dropdown').each(function (index) {
                let $toggleButton = $(this),
                    $parent = $toggleButton.parent(),
                    $dropdown = $parent.find('.dropdown')

                if (!$(event.target).closest('.dropdown').length && !$(event.target).is('.dropdown') && !$(event.target).is('.toggle-dropdown') && !$(event.target).closest('.toggle-dropdown').length) {
                    if ($dropdown.is(':visible')) {
                        $dropdown.slideToggle();
                        $toggleButton.removeClass('active');
                    }
                }
            });
        });
    }

    mobileMenu() {
        $('.header-hamburger').click(function () {
            $(this).toggleClass('open');
            $('.header-mobile-menu').toggleClass('open');
            $('body').toggleClass('no-scroll-menu');
        });
    }

    loader() {
        $.LoadingOverlaySetup({
            background: "rgba(255, 255, 255, 1)",
            imageAutoResize: false,
            fontawesomeAutoResize: false,
            imageResizeFactor: "0.5",
            zIndex: 9,
            backgroundClass: "bg-loadingoverlay",
        });
    }
}

export default Global.getInstance();
