$('.top-column-list').slick({
    dots: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    responsive: [{
        breakpoint: 768,
        settings: {
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            centerMode: true,
        }
    }]
});
$('.top-cosmetics-list').slick({
    dots: false,
    arrows: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [{
        breakpoint: 768,
        settings: {
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            centerMode: true,
        }
    }]
});


$('.menu-column-list').slick({
    dots: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    centerMode: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 4000,
    responsive: [{
        breakpoint: 768,
        settings: {
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});
// access slider
$('.sl-access-slider').slick({
    dots: false,
    slidesToShow: 3,
    swipeToSlide: true,
    centerMode: false,
    infinite: false,
    arrows: false,
    variableWidth: true,
    initialSlide: 0,
    responsive: [{
        breakpoint: 768,
        settings: {
            variableWidth: true,
            slidesToShow: 2,
            centerMode: true,
            dots: true,
            centerPadding: '70px',
        }
    },{
        breakpoint: 480,
        settings: {
            variableWidth: false,
            slidesToShow: 1,
            centerMode: true,
            dots: true,
            centerPadding: '35px',
        }
    }]
});

$('.sl-access-slider').on('afterChange', function(event, slick, currentSlide) {
    if (currentSlide === slick.slideCount - slick.options.slidesToShow) {
        setTimeout(function() {
            $('.sl-access-slider').slick('slickGoTo', 0);
        }, 1000);
    }
});

$('.sl-access-slider-room').slick({
    dots: true,
    speed: 300,
    slidesToScroll: 1,
    swipeToSlide:true,
    centerMode: true,
    infinite: true,
    autoplay: false,
    responsive: [{
        breakpoint: 5000,
        settings: {
            centerPadding: "25%",
            slidesToShow:2,
            centerMode: true,
        }
    },{ 
        breakpoint: 2560,
        settings: {
            centerPadding: "25%",
            slidesToShow:2,
            centerMode: true,
        }
    },{ 
        breakpoint: 1920,
        settings: {
            centerPadding: "25%",
            slidesToShow:1,
            centerMode: true,
        }
    },{ 
        breakpoint: 1440,
        settings: {
            centerPadding: "20%",
            slidesToShow:1,
            centerMode: true,
        }},{ 
            breakpoint: 480,
            settings: {
                centerPadding: "12%",
                slidesToShow:1,
                centerMode: true,
            }
        
    }]
});
        // menu page introduction slider
// $('.introduction').slick({
//   dots: false,
//   speed: 1000,
//   slidesToShow: 3,
//   slidesToScroll: 3,
//   centerMode: false,
//   infinite: true,
//   autoplay: false,
//   autoplaySpeed: 3000,
//   responsive: [
//     {
//       breakpoint: 960,
//       settings: {
//         variableWidth: true,
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//   ]
// });

// menu page whatis
$('.menu-whatis-sp-slider').slick({
    responsive: [{
        breakpoint: 768,
        settings: {
            dots: false,
            speed: 500,
            centerMode: false,
            infinite: true,
            autoplay: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true
        }
    }]
});

// staff list
$('.staff-list').slick({
    dots: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 4000,
    asNavFor: '.sl-staff-inn-content-wr-slider',
    responsive: [{
        breakpoint: 768,
        settings: {
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            adactiveHeight: true,
        }
    }]
});
$('.sl-staff-inn-content-wr-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.staff-list',
    dots: false,
    centerMode: false,
    autoplay: false,
    infinite: true,
    // autoplaySpeed: 0,
    // cssEase: 'linear',
    speed: 2000,
    centerPadding: '0px',
    arrows: false,
    // variableWidth: true,
    // pauseOnHover: false,
    focusOnSelect: true
});
$('.catalog-inn-fl').slick({
    dots: false,
    arrows: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [{
            breakpoint: 9999,
            settings: "unslick"
        },
        {
            breakpoint: 768,
            settings: {
                variableWidth: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                centerMode: true,
            }
        }
    ]
});

$(document).ready(function () {

    // Menu page FAQ
    init_faq_dropdown();

    // navbar scroll change bg
    // changeBg();

    // inquiry confirm
    check_checkbox();


    // TOP MV animation after 300ms
    init_mv_ani();

    // when SP init the category dropdown
    init_category_dropdown('.faq-cate-sp-dropdown');
    init_category_dropdown('.news-cate-sp-dropdown');
    init_category_dropdown('.news-archive-sp-dropdown');
    init_category_dropdown('.campaign-cate-sp-dropdown');
    init_category_dropdown('.campaign-archive-sp-dropdown');
    init_category_dropdown('.column-cate-sp-dropdown');
    init_category_dropdown('.column-archive-sp-dropdown');


});

function init_faq_dropdown() {
    var acc = document.getElementsByClassName("faq-q");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
}

function init_mv_ani() {
    if ($('.l-r-fadein').length > 0) {
        var delay = 0.0;
        $('.l-r-fadein').each(function (index, ele) {
            delay += 0.2;
            $(ele).css('transition-delay', delay + 's');
        });

        setTimeout(function () {
            $('.l-r-fadein').addClass('active-fadein');
        }, 300);

        var btDelay = 0.5;
        if ($('.bot-top-fadein').length > 0) {
            $('.bot-top-fadein').each(function (index, ele) {
                btDelay += 0.5;
                $(ele).css('transition-delay', btDelay + 's');
            });

            setTimeout(function () {
                $('.bot-top-fadein').addClass('active-fadein');
            }, delay * 1000);
        }
    }
}


// navbar scroll change bg
$(window).on('scroll', function () {
    // changeBg();
});

$(window).on('resize', function () {
    // changeBg();

    // when SP init the category dropdown
    init_category_dropdown('.faq-cate-sp-dropdown');
    init_category_dropdown('.news-cate-sp-dropdown');
    init_category_dropdown('.news-archive-sp-dropdown');
    init_category_dropdown('.campaign-cate-sp-dropdown');
    init_category_dropdown('.campaign-archive-sp-dropdown');
    init_category_dropdown('.column-cate-sp-dropdown');
    init_category_dropdown('.column-archive-sp-dropdown');
});


function changeBg() {
    var winHeight = $(window).height();
    var scrollTop = $(window).scrollTop();

    if ($('#mv').length > 0) {
        var elemHeight = $("#mv").height();
        var elementTop = $("#mv").position().top;
        var color = 'rgba(255,255,255,0.8)';

        if (scrollTop > elementTop + elemHeight) {
            color = 'transparent';
            console.log('passed!');
        } else {
            color = 'rgba(255,255,255,0.8)';
            console.log('not yet!');
        }


        $("#masthead").css('background-color', color);
    }
}


function check_checkbox() {

    if ($("input[name='confirm']").prop('checked') == true) {
        setTimeout(function () {
            $("input[name='confirm']").prop('checked', true);
            $('.next-btn.inquiry .wpcf7-submit').removeAttr('disabled');
        }, 300);
    } else {
        setTimeout(function () {
            $('.next-btn.inquiry .wpcf7-submit').removeAttr('disabled');
        }, 300);
    }

}


function init_category_dropdown(class_name) {

    var cateHeight = 0;
    var wWidth = $(window).width();
    if (wWidth <= 768) {
        var category = $(class_name);
        if (category.length > 0) {
            cateHeight = category.find('ul').height();
            category.find('ul').css('height', '0px');
            category.find('ul').addClass('cate-sp-dropdown-list');
            category.find('h3').addClass('cate-sp-dropdown-toggler');
            category.find('h3').on('click', function () {
                var wWidth = $(window).width();
                if (wWidth <= 768) {
                    if ($(this).next('ul').height() == 0) {
                        $(this).next('ul').css('height', $(this).next('ul')[0].scrollHeight + 'px');
                    } else {

                        $(this).next('ul').css('height', '0px');
                    }
                }
            });
        }
    }
}



$(document).ready(function () {

    // Inquiry page
    /// input font
    $('.contact-form-wr-input input').click(function () {
        var thiscl = $(this);
        setTimeout(
            function () {
                thiscl.addClass('font');
            }, 1300);
    });
    $('.contact-form-wr-input input').keypress(function () {
        var thiscl = $(this);
        setTimeout(
            function () {
                thiscl.addClass('font');
            }, 1300);
    });
    // checkbox check or not for confirm
    $('.checkbox .check-1').attr("checked", "checked");
})
////////////////////// Top page Menu modal ///////////////////////
$(".menu-buttton li a").each(function() {
    $(this).click(function(event){
        event.preventDefault();
        $('#menu-modal').fadeIn();
        var id = $(this).parent('li').attr('id');
        console.log(id);
        $("#" + id + "-show").fadeIn();
        $("#" + id + "-show").siblings('.modal-show').fadeOut();
    });

});
$('.modal-close').click(function(){
    $('#menu-modal').fadeOut();
});
$(document).click(function (e) {
    if ($(e.target).is('#menu-modal')) {
        $('#menu-modal').fadeOut();
    }
});
//////////// Price  Scrollbar Js
$(window).load(function(){
    $(".sl-pl-inn-content .price-list-wr .section-inner").mCustomScrollbar({
      axis:"x",
      theme: "dark"
    });
});

// Booking pageタブ
function openCalendar(evt, calendarName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(calendarName).style.display = "grid";
    evt.currentTarget.className += " active";
}

// Open Doctor's calendar by default
document.addEventListener('DOMContentLoaded', function() {
    document.getElementsByClassName("tablinks")[0].click();
});

// let calendar = new Calendar(calendarEl, {
//     plugins: [ googleCalendarPlugin ],
//     googleCalendarApiKey: 'AIzaSyBamhFQLcgDuetVfKVCHsv6z2DfUt_9HUM',
//     events: {
//       googleCalendarId: '2a67795deea0395776c5e0dc9dcc2bb10ffb65ea2dfe11dab4489941659919fa@group.calendar.google.com'
//     }
//   });
  
// メインスライダーの初期化
$('.single-case-slider').slick({
    slidesToShow: 1,         // 1枚表示
    slidesToScroll: 1,       // 1枚ずつスクロール
    arrows: false,           // 矢印を非表示
    fade: true,              // フェード切り替え
    speed: 300,              // 切り替え速度
    asNavFor: '.single-case-nav', // サムネイルスライダーと連携
});

// サムネイルスライダーの初期化
$('.single-case-nav').slick({
slidesToShow: 3,         // 3枚表示
    slidesToScroll: 1,       // 1枚ずつスクロール
    arrows: false,           // 矢印を非表示
    focusOnSelect: true,     // サムネイルクリックでスライダー切り替え
    speed: 300,              // 切り替え速度
    asNavFor: '.single-case-slider', // メインスライダーと連携
});
