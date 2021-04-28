$(document).ready(function() {
    // Select With Checkbox
    $("#checkall").change(function() {
        var checked = $(this).is(":checked");
        if (checked) {
            $(".form-check-input").each(function() {
                $(this).prop("checked", true);
                $(this).parent(".custom-control").find(".show-msg-div").removeClass('d-none');
            });
        } else {
            $(".form-check-input").each(function() {
                $(this).prop("checked", false);
                $(this).parent(".custom-control").find(".show-msg-div").addClass('d-none');
            });
        }
    });

    $(".selectedId").click(function() {
        if ($(this).is(":checked")) {
            $('input.selectedId').not(this).prop('checked', false); 
            // $('.selectedId').removeAttr('checked');
            // $('.selectedId').attr('checked', false).triggerHandler('click');
            $(".show-msg-div").addClass('d-none');

            $(this).attr('checked',true);
            $(this).parent(".custom-control").find(".show-msg-div").removeClass('d-none');
            // $(this).siblings(".show-msg-div").show();
        } else {
            $(this).parent(".custom-control").find(".show-msg-div").addClass('d-none');
            // $(this).siblings(".show-msg-div").hide();
        }
    });

    // input text clear
    $("input[type='text']").on('keyup input', function() {
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

    // Sidebar Menu Collapse
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

    // Setting Menu Collapse
    $('#reservationDate').on('change', function() {
        var pickedDate = $('input').val();
        $('#pickedDate').html(pickedDate);
    });

    $navToggler = $('.side-setting-menu-toggler'),
        $navClose = $('.side-setting-menu-close'),
        $navbar = $('.side-setting-menu');

    $navToggler.on('click', function() {
        $navbar.addClass('show');
        $('body').addClass('overflow');
    })

    $navClose.on('click', function() {
        $navbar.removeClass('show');
        $('body').removeClass('overflow');
    })

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
});