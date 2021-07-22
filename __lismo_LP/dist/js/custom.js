$(document).ready(function() {
    //sticky header
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 200) {
            $('header').addClass('fixed-header');
        } else {
            $('header').removeClass('fixed-header');
        }
    });


    $navToggler = $('.menu-toggler'),
        $navClose = $('.menu-close'),
        $navbar = $('.nav-menu-list');

    $navToggler.on('click', function() {
        $navbar.toggleClass('show');
        $('body').toggleClass('overflow');
        $('.menu-toggler').addClass('menu-active');
    })

    $navClose.on('click', function() {
        $navbar.removeClass('show');
    })

    //matchheight
    $('.section-two .sec-list-box .s-icon').matchHeight();
    $('.section-two .sec-list-box .d-cell p').matchHeight();
    $('.step-list .step-list-box .s-icon').matchHeight();
    $('.step-list .step-list-box p').matchHeight();
    $('.sec-five-top .bg-white').matchHeight();

    $('.voice-of-lismore .slider').slick({
        dots: false,
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        arrows: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $('.faq .slider').slick({
        dots: false,
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        arrows: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

});



$(function() {
    initScrollToTop();
});
// End $(function)

function initScrollToTop() {
    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop(),
            docHeight = $(document).height(),
            winHeight = $(window).height(),
            scrollPercent = (scrollTop) / (docHeight - winHeight),
            scrollPercentRounded = Math.round(scrollPercent * 100);
        if (scrollPercentRounded > 15) {
            $('.topTop').css({
                opacity: 1,
                transform: 'translateY(-50%)'
            });
        } else {
            $('.topTop').css({
                opacity: 0,
                transform: 'translateY(50%)'
            });
        }
    });

    // Click event to scroll to top
    $('.topTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1200);
        return false;
    });
}
// Detect request animation frame
var scroll = window.requestAnimationFrame ||
    // IE Fallback
    function(callback) {
        window.setTimeout(callback, 1000 / 60)
    };
var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {

    Array.prototype.forEach.call(elementsToShow, function(element) {
        if (isElementInViewport(element)) {
            element.classList.add('fadeInUp');
        } else {
            element.classList.remove('fadeInUp');
        }
    });

    scroll(loop);
}

// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0 &&
            rect.bottom >= 0) ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
        (rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}