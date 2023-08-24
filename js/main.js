const nav = document.querySelector('#nav');
const navBtn = document.querySelector('#nav-btn');
const navBtnImg = document.querySelector('#nav-btn-img');
const navLink = document.querySelectorAll('.nav-link');
navBtn.onclick = () => {
    if (nav.classList.toggle('open')) {
        navBtnImg.src = "./img/icons/nav-close.svg";
    } else {
        navBtnImg.src = './img/icons/nav-open.svg';
    }
}

//console.log(navLink)
navLink.forEach(function (item, index, array) {
    item.onclick = () => {
        nav.classList.remove('open');
        navBtnImg.src = './img/icons/nav-open.svg';

    }
});
AOS.init();
///----------------------------------------------
$(document).ready(function () {


    jQuery('body').on('click', '.btn', function (e) {

        e.preventDefault();

        jQuery('.widget-callback').toggleClass('widget-callback-form-open');

    });

});

var $popOverlay = $(".callback-form");
var $popWindow = $(".widget-callback");

var $popClose = $(".close-btn");

$(function () {
    // Close Pop-Up after clicking on the button "Close"
    $popClose.on("click", function () {
        $popOverlay.fadeOut();



    })
});
$(document).ready(function () {

    //ajax-отправка данных

    jQuery("#callback-widget-form").submit(function () {

        var formID = jQuery(this).attr('id');

        var formNm = jQuery('#' + formID);

        jQuery.ajax({

            type: "POST",

            url: 'mail.php',

            data: formNm.serialize(),

            success: function (data) {

                jQuery(formNm).html(data);

            },

            error: function (jqXHR, text, error) {

                jQuery(formNm).html(error);

            }

        });

        return false;

    });

});
///--------------------------------------
$(document).ready(function () {
    $('.sliders').slick({
        //dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<button class="slider-btn slider-prev"><img src="img/arrow/left.png" alt="Стрелка влево"></button>',
        nextArrow: '<button class="slider-btn slider-next"><img src="img/arrow/right.png" alt="Стрелка вправо"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });
});
$(document).ready(function () {
    $('.feedback-sliders').slick({
        //dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="slider-btn slider-prev2"><img src="img/arrow/left.png" alt="Стрелка влево"></button>',
        nextArrow: '<button class="slider-btn slider-next2"><img src="img/arrow/right.png" alt="Стрелка вправо"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]

    });
});
$(document).ready(function () {
    $(".phone").inputmask("+7 (999) 999-9999");
});