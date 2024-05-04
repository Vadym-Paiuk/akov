import "jquery-nice-select";
import "jquery-timepicker/jquery.timepicker";

class Global {
    constructor() {
        this.loader();
        this.dropdown();
        this.mobileMenu();
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }

        return this.instance;
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
