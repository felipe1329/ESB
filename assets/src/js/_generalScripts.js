/* eslint-disable */

class General {
    constructor() {
        this.testVariable = 'script working';
        this.init();

        window.onscroll = function () { headerSticky() };
        var header = document.getElementById("masthead");
        var sticky = header.offsetTop;
        function headerSticky() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }

        $('.hambuerger-menu').on('click', function () {
            $('#site-navigation').addClass('active');
            $('body').addClass('menu-open');
        });

        $('.close-nav').on('click', function () {
            $('#site-navigation').removeClass('active');
            $('body').removeClass('menu-open');
        });

        $('.slider-coming').slick({
            infinite: true,
            slidesToShow: 2,
            arrows: true,
            dots: true,
            padding: 80,
            prevArrow: "<div class='a-left control-c prev slick-prev'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'><g><path fill='#62b6d8' d='M983.3,484.4L760.6,261.7c-4.5-4.5-8.9-6.7-15.6-6.7c-13.4,0-22.3,8.9-22.3,22.3c0,6.7,2.2,11.1,6.7,15.6l184.9,184.9h-882c-13.4,0-22.3,8.9-22.3,22.3c0,13.4,8.9,22.3,22.3,22.3h882L729.4,707.1c-4.5,4.5-6.7,8.9-6.7,15.6c0,13.4,8.9,22.3,22.3,22.3c6.7,0,11.1-2.2,15.6-6.7l222.7-222.7c4.5-4.5,6.7-8.9,6.7-15.6S987.8,488.9,983.3,484.4z'/></g></svg></div>",
            nextArrow: "<div class='a-right control-c next slick-next'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'><g><path fill='#62b6d8' d='M983.3,484.4L760.6,261.7c-4.5-4.5-8.9-6.7-15.6-6.7c-13.4,0-22.3,8.9-22.3,22.3c0,6.7,2.2,11.1,6.7,15.6l184.9,184.9h-882c-13.4,0-22.3,8.9-22.3,22.3c0,13.4,8.9,22.3,22.3,22.3h882L729.4,707.1c-4.5,4.5-6.7,8.9-6.7,15.6c0,13.4,8.9,22.3,22.3,22.3c6.7,0,11.1-2.2,15.6-6.7l222.7-222.7c4.5-4.5,6.7-8.9,6.7-15.6S987.8,488.9,983.3,484.4z'/></g></svg></div>",
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        arrows: false
                    }
                }
            ]
        });

        $('.slider-oldest').slick({
            infinite: true,
            slidesToShow: 2,
            arrows: false,
            padding: 80,
            slidesToScroll: 1
        });

        $('.content-slider-profile').slick({
            infinite: false,
            slidesToShow: 1,
            fade: true,
            dots: true,
            arrows: true,
            prevArrow: "<div class='a-left control-c prev slick-prev'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'><g><path fill='#62b6d8' d='M983.3,484.4L760.6,261.7c-4.5-4.5-8.9-6.7-15.6-6.7c-13.4,0-22.3,8.9-22.3,22.3c0,6.7,2.2,11.1,6.7,15.6l184.9,184.9h-882c-13.4,0-22.3,8.9-22.3,22.3c0,13.4,8.9,22.3,22.3,22.3h882L729.4,707.1c-4.5,4.5-6.7,8.9-6.7,15.6c0,13.4,8.9,22.3,22.3,22.3c6.7,0,11.1-2.2,15.6-6.7l222.7-222.7c4.5-4.5,6.7-8.9,6.7-15.6S987.8,488.9,983.3,484.4z'/></g></svg></div>",
            nextArrow: "<div class='a-right control-c next slick-next'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'><g><path fill='#62b6d8' d='M983.3,484.4L760.6,261.7c-4.5-4.5-8.9-6.7-15.6-6.7c-13.4,0-22.3,8.9-22.3,22.3c0,6.7,2.2,11.1,6.7,15.6l184.9,184.9h-882c-13.4,0-22.3,8.9-22.3,22.3c0,13.4,8.9,22.3,22.3,22.3h882L729.4,707.1c-4.5,4.5-6.7,8.9-6.7,15.6c0,13.4,8.9,22.3,22.3,22.3c6.7,0,11.1-2.2,15.6-6.7l222.7-222.7c4.5-4.5,6.7-8.9,6.7-15.6S987.8,488.9,983.3,484.4z'/></g></svg></div>",
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false
                    }
                }
            ]
        }).on('afterChange', function (event, slick, currentSlide) {
            var slideCount = slick.slideCount;
            var $prevArrow = $('.slick-prev');
            var $nextArrow = $('.slick-next');

            // Ocultar flecha previa si está en el primer elemento
            if (currentSlide === 0) {
                $prevArrow.removeClass('show');
            } else {
                $prevArrow.addClass('show');
            }

            // Ocultar flecha siguiente si está en el último elemento
            if (currentSlide === slideCount - 1) {
                $nextArrow.hide();
            } else {
                $nextArrow.show();
            }
        });

        $('.content-slider-product').slick({
            infinite: false,
            slidesToShow: 3,
            dots: false,
            arrows: true,
            prevArrow: "<img class='a-left control-c prev slick-prev' src='YOUR LEFT ARROW IMAGE URL'>",
            nextArrow: "<div class='a-right control-c next slick-next'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'><g><path fill='#62b6d8' d='M983.3,484.4L760.6,261.7c-4.5-4.5-8.9-6.7-15.6-6.7c-13.4,0-22.3,8.9-22.3,22.3c0,6.7,2.2,11.1,6.7,15.6l184.9,184.9h-882c-13.4,0-22.3,8.9-22.3,22.3c0,13.4,8.9,22.3,22.3,22.3h882L729.4,707.1c-4.5,4.5-6.7,8.9-6.7,15.6c0,13.4,8.9,22.3,22.3,22.3c6.7,0,11.1-2.2,15.6-6.7l222.7-222.7c4.5-4.5,6.7-8.9,6.7-15.6S987.8,488.9,983.3,484.4z'/></g></svg></div>",
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        slidesToScroll: 1,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]
        });

        $('.slider-articles').slick({
            infinite: true,
            slidesToShow: 2,
            centerMode: true,
            centerPadding: '60px',
            dots: false,
            arrows: false,
            prevArrow: "<img class='a-left control-c prev slick-prev' src='YOUR LEFT ARROW IMAGE URL'>",
            nextArrow: "<div class='a-right control-c next slick-next'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'><g><path fill='#62b6d8' d='M983.3,484.4L760.6,261.7c-4.5-4.5-8.9-6.7-15.6-6.7c-13.4,0-22.3,8.9-22.3,22.3c0,6.7,2.2,11.1,6.7,15.6l184.9,184.9h-882c-13.4,0-22.3,8.9-22.3,22.3c0,13.4,8.9,22.3,22.3,22.3h882L729.4,707.1c-4.5,4.5-6.7,8.9-6.7,15.6c0,13.4,8.9,22.3,22.3,22.3c6.7,0,11.1-2.2,15.6-6.7l222.7-222.7c4.5-4.5,6.7-8.9,6.7-15.6S987.8,488.9,983.3,484.4z'/></g></svg></div>",
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        centerMode: false,
                        centerPadding: '20px',
                        slidesToScroll: 1,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        centerMode: false,
                        slidesToScroll: 1,
                        centerPadding: '20px',
                        dots: false
                    }
                }
            ]
        });

        var within_first_modal = false;
        $('.btn-second-modal').on('click', function () {
            if ($(this).hasClass('within-first-modal')) {
                within_first_modal = true;
                $('#first-modal').modal('hide');
            }
            $('#second-modal').modal('show');
        });

        $('.btn-second-modal-close').on('click', function () {
            $('#second-modal').modal('hide');
            if (within_first_modal) {
                $('#first-modal').modal('show');
                within_first_modal = false;
            }
        });

        $('.btn-toggle-fade').on('click', function () {
            if ($('.modal').hasClass('fade')) {
                $('.modal').removeClass('fade');
                $(this).removeClass('btn-success');
            } else {
                $('.modal').addClass('fade');
                $(this).addClass('btn-success');
            }
        });

        var telInput = $("#phone"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({

            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "auto",
            ipinfoToken: "yolo",

            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });

        var reset = function () {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function () {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);

    }

    init() {
    }
}

export default General;
