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

    $(".modal #checkall1").change(function() {
        var checked = $(this).is(":checked");
        if (checked) {
            $(".modal .form-check-input").each(function() {
                $(this).prop("checked", true);
                $(this).parent(".custom-control").find(".show-msg-div").removeClass('d-none');
            });
        } else {
            $(".modal .form-check-input").each(function() {
                $(this).prop("checked", false);
                $(this).parent(".custom-control").find(".show-msg-div").addClass('d-none');
            });
        }
    });

    $(".selectedId").click(function() {
        if ($(this).is(":checked")) {
            // $('input.selectedId').not(this).prop('checked', false);
            // $('.selectedId').removeAttr('checked');
            // $('.selectedId').attr('checked', false).triggerHandler('click');
            // $(".show-msg-div").addClass('d-none');

            $(this).attr('checked', true);
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
            $("#toggle-div1").fadeIn("slow");
        });
        $("#close-button1").click(function() {
            $("#toggle-div1").fadeOut("fast");
        });

        $("#see-detail-btn2").click(function() {
            $("#toggle-div2").fadeIn("slow");
        });
        $("#close-button2").click(function() {
            $("#toggle-div2").fadeOut("fast");
        });

        $("#see-detail-btn3").click(function() {
            $("#toggle-div3").fadeIn("slow");
        });
        $("#close-button3").click(function() {
            $("#toggle-div3").fadeOut("fast");
        });

        $("#see-detail-btn4").click(function() {
            $("#toggle-div4").fadeIn("slow");
        });
        $("#close-button4").click(function() {
            $("#toggle-div4").fadeOut("fast");
        });

        $("#see-detail-btn5").click(function() {
            $("#toggle-div5").fadeIn("slow");
        });
        $("#close-button5").click(function() {
            $("#toggle-div5").fadeOut("fast");
        });
    });

    // INITIALIZE DATEPICKER PLUGIN
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });

    $('form').on('click', '.clone', function() {
        $('.clone').closest('form').find('.form-group.mb-2').first().clone().appendTo('.results');
    });

    $('form').on('click', '.add-more-url', function() {
        $('.add-more-url').closest('form').find('.url-clone').first().clone().appendTo('.appends');
    });

    //add and remove table tr
    $(".add-more").on("click", function() {
        var $tableBody = $('.table').find("tbody"),
            $trLast = $tableBody.find("tr.tr-clone:last-child"),
            $trNew = $trLast.clone();

        $trLast.after($trNew);

        $('tr.tr-clone .delete-row').on('click', function() {
            $(this).closest("tr.tr-clone").remove();
        });
    });
    $(".add-more-1").on("click", function() {
        var $tableBody = $('.table').find("tbody"),
            $trLast = $tableBody.find("tr.tr-clone1:last-child"),
            $trNew = $trLast.clone();

        $trLast.after($trNew);

        $('tr.tr-clone1 .delete-row').on('click', function() {
            $(this).closest("tr.tr-clone1").remove();
        });
    });

    //matchheight
    $('.slick-slide .data-top').matchHeight();
    $('.slick-slide .data-bottom').matchHeight();
    $('.slick-slide .data-table-group').matchHeight();

    jQuery('.sales-ranking-slider').slick(slickOptions).each(function() {
        $('.slick-slide .data-top').matchHeight();
        $('.slick-slide .data-bottom').matchHeight();
        $('.slick-slide .data-table-group').matchHeight();
    });

});

$(window).on('load', function() {
    setTimeout(function() { // allowing 3 secs to fade out loader
        $('.loading-wrap').fadeOut('slow');
    }, 5000);
});

(function($, window) {
    'use strict';

    var MultiModal = function(element) {
        this.$element = $(element);
        this.modalCount = 0;
    };

    MultiModal.BASE_ZINDEX = 1040;

    MultiModal.prototype.show = function(target) {
        var that = this;
        var $target = $(target);
        var modalIndex = that.modalCount++;

        $target.css('z-index', MultiModal.BASE_ZINDEX + (modalIndex * 20) + 10);

        // Bootstrap triggers the show event at the beginning of the show function and before
        // the modal backdrop element has been created. The timeout here allows the modal
        // show function to complete, after which the modal backdrop will have been created
        // and appended to the DOM.
        window.setTimeout(function() {
            // we only want one backdrop; hide any extras
            if (modalIndex > 0)
                $('.modal-backdrop').not(':first').addClass('hidden');

            that.adjustBackdrop();
        });
    };

    MultiModal.prototype.hidden = function(target) {
        this.modalCount--;

        if (this.modalCount) {
            this.adjustBackdrop();

            // bootstrap removes the modal-open class when a modal is closed; add it back
            $('body').addClass('modal-open');
        }
    };

    MultiModal.prototype.adjustBackdrop = function() {
        var modalIndex = this.modalCount - 1;
        $('.modal-backdrop:first').css('z-index', MultiModal.BASE_ZINDEX + (modalIndex * 20));
    };

    function Plugin(method, target) {
        return this.each(function() {
            var $this = $(this);
            var data = $this.data('multi-modal-plugin');

            if (!data)
                $this.data('multi-modal-plugin', (data = new MultiModal(this)));

            if (method)
                data[method](target);
        });
    }

    $.fn.multiModal = Plugin;
    $.fn.multiModal.Constructor = MultiModal;

    $(document).on('show.bs.modal', function(e) {
        $(document).multiModal('show', e.target);
    });

    $(document).on('hidden.bs.modal', function(e) {
        $(document).multiModal('hidden', e.target);
    });
}(jQuery, window));