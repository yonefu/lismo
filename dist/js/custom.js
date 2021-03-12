$(document).ready(function() {
    // Select With Checkbox
    $("#checkall").change(function() {
        var checked = $(this).is(":checked");
        if (checked) {
            $(".form-check-input").each(function() {
                $(this).prop("checked", true);
            });
        } else {
            $(".form-check-input").each(function() {
                $(this).prop("checked", false);
            });
        }
    });

    $("#selectedId").click(function() {
        if ($(this).is(":checked")) {
            $("#showDiv").show();
        } else {
            $("#showDiv").hide();
        }
    });

    // input text clear
    $("input").on('keyup input', function() {
        if ($(this).val()) {
            $(".search-box").addClass("show");
        } else {
            $(".search-box").removeClass("show");
        }
    });
    $('.clearable').click(function() {
        $('input').val('').focus();
        $(".search-box").removeClass("show");
    });

    // sidebar menu collapse
    $("[data-trigger]").on("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        var offcanvas_id = $(this).attr('data-trigger');
        $(offcanvas_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    $(".btn-close, .screen-overlay").click(function(e) {
        $(".mobile-offcanvas").removeClass("show");
        $("body").removeClass("offcanvas-active");
    });

    // Prevent two submenus from being opened at once
    $('.side-setting-menu li.dropdown > a').on('click', function(event) {

        $(this).parent().find('ul').first().toggle(300);
        $(this).parent('li').addClass('opened');
        $(this).parent().siblings().find('ul').hide(200);
        $(this).parent().siblings('li').removeClass('opened');
        $(this).siblings().find('li').removeClass('opened');
        event.preventDefault()
    });

    //
    $('.modal').on('shown.bs.modal', function(e) {
        $("#see-detail-btn1").click(function() {
            $("#toggle-div1").slideDown("slow");
        });
        $("#close-button1").click(function() {
            $("#toggle-div1").slideUp("fast");
        });

        $("#see-detail-btn2").click(function() {
            $("#toggle-div2").slideDown("slow");
        });
        $("#close-button2").click(function() {
            $("#toggle-div2").slideUp("fast");
        });

        $("#see-detail-btn3").click(function() {
            $("#toggle-div3").slideDown("slow");
        });
        $("#close-button3").click(function() {
            $("#toggle-div3").slideUp("fast");
        });

        $("#see-detail-btn4").click(function() {
            $("#toggle-div4").slideDown("slow");
        });
        $("#close-button4").click(function() {
            $("#toggle-div4").slideUp("fast");
        });

        $("#see-detail-btn5").click(function() {
            $("#toggle-div5").slideDown("slow");
        });
        $("#close-button5").click(function() {
            $("#toggle-div5").slideUp("fast");
        });
    });

    // INITIALIZE DATEPICKER PLUGIN
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });


    // FOR DEMO PURPOSE
    $('#reservationDate').on('change', function() {
        var pickedDate = $('input').val();
        $('#pickedDate').html(pickedDate);
    });


    //sales ranking slider
    $('.sales-ranking-slider').slick({
        dots: false,
        centerMode: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: true,
                centerMode: true,
                slidesToShow: 4
            }
        }, {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                slidesToShow: 3
            }
        }, {
            breakpoint: 576,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 2
            }
        }]
    });
});