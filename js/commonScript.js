$(document).ready(function () {


    var fullPage = $('#fullpage');
    var wrapSlider = $('.wrap-slider');
    var btn1 = $('.btn1');
    var btn2 = $('.btn2');
    var panelFormTwo = $('.panel-form.two:before');
    var usernamePanelTwo = $('#username-panel-two');
    var btnb1 = $('.btn1');
    var btnb2 = $('.btn2');
    var modalComment = $('.js-click-modal-comment');
    var modalFeedback = $('.js-click-modal-feedback');
    var closeModalComment = $('.js-close-modal-comment');
    var closeModalFeedback = $('.js-close-modal-feedback');
    var trigger = $('.trigger-card-home');
    var mapHome = $('#map-home');
    var card1 = $('.card1');
    var card2 = $('.card2');
    var card3 = $('.card3');
    var card4 = $('.card4');
    var trCdIt1 = $('.trigger-card-item-1');
    var trCdIt2 = $('.trigger-card-item-2');
    var trCdIt3 = $('.trigger-card-item-3');
    var trCdIt4 = $('.trigger-card-item-4');

    // var showLink1 = $('#showLink-1 ');
    // var showLink2 = $('#showLink-2 ');
    // var showLink3 = $('#showLink-3 ');
    // var showLink4 = $('#showLink-4 ');

    var contentBox = $('#content-box');
    var statusBar = $('#statusBar');
    var trCdBtn = $('.trigger-card-btn');
    var trCdLink = $("a.trigger-card-link");
    var footerComment = $('#footer_comment');
    var footerFeedback = $('#footer_feedback');
    var modalBottom = $('#modal-bottom');
    var modalRight = $('.modal-right');
    var modalLeft = $('.modal-left');
    var slSlControl00 = $('#slick-slide-control00');
    var slSlControl01 = $('#slick-slide-control01');
    var slSlControl02 = $('#slick-slide-control02');
    var slSlControl03 = $('#slick-slide-control03');
    var slSlControl04 = $('#slick-slide-control04');
    var btnTopBox = $('#btn-top-box');
    var previewBoxLink = $('.linkLoad');

    var breadcrumbs = $('#breadcrumbs');
    var bcrumbsItemFirst = $('#breadcrumbs .bcrumbsItem:first-child');
    var bcrumbsItemFirstBefore = $('#statusBar .breadcrumbs .bcrumbsItem:first-child::before');
    var bcrumbsItem2 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(2)');
    var bcrumbsItem3 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(3)');
    var bcrumbsItem4 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(4)');


    var bcrumbsItem5 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(5)');
    var bcrumbsItem6 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(6)');
    var bcrumbsItem7 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(7)');
    var bcrumbsItem8 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(8)');
    var bcrumbsItem9 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(9)');
    var bcrumbsItem10 = $('#statusBar .breadcrumbs .bcrumbsItem:nth-child(10)');

    var bcrumbsItemLast = $('#statusBar .breadcrumbs .bcrumbsItem:last-child');
    var bcrumbsItemRed = $('#breadcrumbs .bcrumbsItem-Red');
    var bcrumbsItemYellow = $('#breadcrumbs .bcrumbsItem-Yellow');
    var bcrumbsItemGreen = $('#breadcrumbs .bcrumbsItem-Green');
    var bcrumbsItemBlue = $('#breadcrumbs .bcrumbsItem-Blue');
    var bcrumbsItemRedBefore = $('#breadcrumbs .bcrumbsItem-Red:before');
    var bcrumbsItemYellowBefore = $('#breadcrumbs .bcrumbsItem-Yellow:before');
    var bcrumbsItemGreenBefore = $('#breadcrumbs .bcrumbsItem-Green:before');
    var bcrumbsItemBlueBefore = $('#breadcrumbs .bcrumbsItem-Blue:before');
    var bcrumbsItemDash2 = $('#breadcrumbs li:nth-child(2)');
    var bcrumbsItemDash4 = $('#breadcrumbs li:nth-child(4)');
    var bcrumbsItemDash6 = $('#breadcrumbs li:nth-child(6)');
    var bcrumbsItemDash8 = $('#breadcrumbs li:nth-child(8)');
    var bcrumbsItemDash10 = $('#breadcrumbs li:nth-child(10)');
    var bcrumbsItemDash12 = $('#breadcrumbs li:nth-child(12)');
    var bcrumbsItemDash14 = $('#breadcrumbs li:nth-child(14)');
    var bcrumbsItemDash16 = $('#breadcrumbs li:nth-child(16)');
    var bcrumbsItemDash18 = $('#breadcrumbs li:nth-child(18)');
    var bcrumbsItemDash = $("#breadcrumbs li.dash");
    // var bcrumbsItemDashCurrent = $('#breadcrumbs li:not(".dash:nth-child(2)")');


    var hash = window.location.hash.substr(1);
    var loader = $('.loader');
    var autorization = $('#autorization');
    // $(bcrumbsItemFirst).css("display: flex");
    // $(bcrumbsItemFirstBefore).css("display: flex");zation');

    //  $('#fullpage').fullpage
    // $(fullPage).fullpage({
    //     sectionSelector: '.section',
    //     slideSelector: '.slide',
    //     navigation: true,
    //     controlArrows: false,
    //     slidesNavigation: true,
    //     autoScrolling: true,
    //     scrollHorizontally: true,
    //     // anchors: ['firstPage', 'secondPage'],
    //     anchors: ['firstPage'],
    //     menu: '#menu',
    //     navigation: false,
    //     showActiveTooltip: true,
    //     fitToSection: true,
    //     lazyLoad: true,
    //     mode: 'fade',
    // });

    // $.fn.fullpage.setAllowScrolling(false);

    //слайдер
    $('.wrap-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        //asNavFor: '.navbar',
        slidesToShow: 1
    });


    $(autorization).on('click', function () {
        $.fancybox.open({
            type: 'iframe',
            src: 'include-sub-web-page/index-form-autorization.html',
            iframe: {
                preload: false,
            }
        });
    });
    $(autorization).on('click', function () {
        $('#form-login #username').focus();
    });

    //E-mail Ajax Send форма - обратной связи
    $("feedback_form").submit(function () { //изменить id формы
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function () {
            alert("Thank you!");
            setTimeout(function () {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });


    $(panelFormTwo).on('click', function () {
        $(usernamePanelTwo).focus();
    });


    $(modalComment).on('click', function () {
        $(footerComment).focus();
        $(modalBottom).addClass('modal-open');
        $(modalRight).addClass('modal-hidden');
    });
    $(closeModalComment).on('click', function () {
        $(modalBottom).removeClass('modal-open');
        $(modalRight).removeClass('modal-hidden');
    });
    $(modalFeedback).on('click', function () {
        $(footerFeedback).focus();
        $(modalBottom).addClass('modal-open');
        $(modalLeft).addClass('modal-hidden');
    });
    $(closeModalFeedback).on('click', function () {
        $(modalBottom).removeClass('modal-open');
        $(modalLeft).removeClass('modal-hidden');
    });


    $('.form-panel.two:hover:before').on('click', function () {
        $('#form-registration #username').focus();
    });

    $('.js-click-modal-feedback').on('click', function () {
        $('#feedback_form #textarea-feedback').focus();
    });




    $(trigger).on('click', function () {
        $('#slick-slide-control00').click();
        $(contentBox).css("display", "none");
        $(statusBar).css("display", "none");
    });

    $(card1).on('click', function () {
        $('#slick-slide-control01').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");

        if ($(bcrumbsItemRed).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemYellow).css("display", "none");
            $(bcrumbsItemGreen).css("display", "none");
            $(bcrumbsItemBlue).css("display", "none");
            $(bcrumbsItemYellowBefore).css("display", "none");
            $(bcrumbsItemGreenBefore).css("display", "none");
            $(bcrumbsItemBlueBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");

        }
    });

    $(trCdIt1).on('click', function () {
        $('#slick-slide-control01').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");
        if ($(bcrumbsItemRed).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemYellow).css("display", "none");
            $(bcrumbsItemGreen).css("display", "none");
            $(bcrumbsItemBlue).css("display", "none");
            $(bcrumbsItemYellowBefore).css("display", "none");
            $(bcrumbsItemGreenBefore).css("display", "none");
            $(bcrumbsItemBlueBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");

        }
    });
    // $(card1).on('click', function () {
    //     if ($(bcrumbsItemRed).css("display", "flex")) {
    //         $(bcrumbsItemYellow).css("display", "none");
    //         $(bcrumbsItemGreen).css("display", "none");
    //         $(bcrumbsItemBlue).css("display", "none");
    //         $(bcrumbsItemYellowBefore).css("display", "none");
    //         $(bcrumbsItemGreenBefore).css("display", "none");
    //         $(bcrumbsItemBlueBefore).css("display", "none");
    //         $(bcrumbsItemDash2).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(2)")').css("display", "none");


    //     }
    // });
    // $(trCdIt1).on('click', function () {
    //     if ($(bcrumbsItemRed).css("display", "flex")) {
    //         $(bcrumbsItemYellow).css("display", "none");
    //         $(bcrumbsItemGreen).css("display", "none");
    //         $(bcrumbsItemBlue).css("display", "none");
    //         $(bcrumbsItemYellowBefore).css("display", "none");
    //         $(bcrumbsItemGreenBefore).css("display", "none");
    //         $(bcrumbsItemBlueBefore).css("display", "none");
    //         $(bcrumbsItemDash2).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(2)")').css("display", "none");
    //     }
    // });


    $(card2).on('click', function () {
        $('#slick-slide-control02').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");
        if ($(bcrumbsItemYellow).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemRed).css("display", "none");
            $(bcrumbsItemGreen).css("display", "none");
            $(bcrumbsItemBlue).css("display", "none");
            $(bcrumbsItemRedBefore).css("display", "none");
            $(bcrumbsItemGreenBefore).css("display", "none");
            $(bcrumbsItemBlueBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");

        }
    });
    $(trCdIt2).on('click', function () {
        $('#slick-slide-control02').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");
        if ($(bcrumbsItemYellow).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemRed).css("display", "none");
            $(bcrumbsItemGreen).css("display", "none");
            $(bcrumbsItemBlue).css("display", "none");
            $(bcrumbsItemRedBefore).css("display", "none");
            $(bcrumbsItemGreenBefore).css("display", "none");
            $(bcrumbsItemBlueBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");

        }
    });
    // $(card2).on('click', function () {
    //     if ($(bcrumbsItemYellow).css("display", "flex")) {
    //         $(bcrumbsItemRed).css("display", "none");
    //         $(bcrumbsItemGreen).css("display", "none");
    //         $(bcrumbsItemBlue).css("display", "none");
    //         $(bcrumbsItemRedBefore).css("display", "none");
    //         $(bcrumbsItemGreenBefore).css("display", "none");
    //         $(bcrumbsItemBlueBefore).css("display", "none");
    //         $(bcrumbsItemDash4).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(4)")').css("display", "none");
    //     }
    // });
    // $(trCdIt2).on('click', function () {
    //     if ($(bcrumbsItemYellow).css("display", "flex")) {
    //         $(bcrumbsItemRed).css("display", "none");
    //         $(bcrumbsItemGreen).css("display", "none");
    //         $(bcrumbsItemBlue).css("display", "none");
    //         $(bcrumbsItemRedBefore).css("display", "none");
    //         $(bcrumbsItemGreenBefore).css("display", "none");
    //         $(bcrumbsItemBlueBefore).css("display", "none");
    //         $(bcrumbsItemDash4).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(4)")').css("display", "none");
    //     }
    // });

    $(card3).on('click', function () {
        $('#slick-slide-control03').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");
        if ($(bcrumbsItemGreen).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemRed).css("display", "none");
            $(bcrumbsItemYellow).css("display", "none");
            $(bcrumbsItemBlue).css("display", "none");
            $(bcrumbsItemRedBefore).css("display", "none");
            $(bcrumbsItemYellowBefore).css("display", "none");
            $(bcrumbsItemBlueBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");

        }
    });

    $(trCdIt3).on('click', function () {
        $('#slick-slide-control03').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");
        if ($(bcrumbsItemGreen).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemRed).css("display", "none");
            $(bcrumbsItemYellow).css("display", "none");
            $(bcrumbsItemBlue).css("display", "none");
            $(bcrumbsItemRedBefore).css("display", "none");
            $(bcrumbsItemYellowBefore).css("display", "none");
            $(bcrumbsItemBlueBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");
            // $('#breadcrumbs li:not(".dash:nth-child(6)")').css("display", "none");
        }
    });
    // $(card3).on('click', function () {
    //     if ($(bcrumbsItemGreen).css("display", "flex")) {
    //         $(bcrumbsItemRed).css("display", "none");
    //         $(bcrumbsItemYellow).css("display", "none");
    //         $(bcrumbsItemBlue).css("display", "none");
    //         $(bcrumbsItemRedBefore).css("display", "none");
    //         $(bcrumbsItemYellowBefore).css("display", "none");
    //         $(bcrumbsItemBlueBefore).css("display", "none");
    //         $(bcrumbsItemDash6).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(6)")').css("display", "none");
    //     }
    // });
    // $(trCdIt3).on('click', function () {
    //     if ($(bcrumbsItemGreen).css("display", "flex")) {
    //         $(bcrumbsItemRed).css("display", "none");
    //         $(bcrumbsItemYellow).css("display", "none");
    //         $(bcrumbsItemBlue).css("display", "none");
    //         $(bcrumbsItemRedBefore).css("display", "none");
    //         $(bcrumbsItemYellowBefore).css("display", "none");
    //         $(bcrumbsItemBlueBefore).css("display", "none");
    //         $(bcrumbsItemDash6).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(6)")').css("display", "none");
    //     }
    // });

    $(card4).on('click', function () {
        $('#slick-slide-control04').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");
        if ($(bcrumbsItemBlue).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemRed).css("display", "none");
            $(bcrumbsItemGreen).css("display", "none");
            $(bcrumbsItemYellow).css("display", "none");
            $(bcrumbsItemRedBefore).css("display", "none");
            $(bcrumbsItemGreenBefore).css("display", "none");
            $(bcrumbsItemYellowBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");

        }
    });
    $(trCdIt4).on('click', function () {
        $('#slick-slide-control04').click();
        $(contentBox).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "3% 97%",
            "grid-gap": "0",
        });
        $(statusBar).css({
            "display": "grid",
            "grid-template-columns": "100%",
            "grid-template-rows": "100%",
        });
        // $(mapHome).css("display", "none");
        if ($(bcrumbsItemBlue).css({
                "display": "-ms-flexbox",
                "display": "-webkit-flex",
                "display": "flex",
                "-webkit-flex-direction": "row",
                "-ms-flex-direction": "row",
                " flex-direction": "row",
                "-webkit-flex-wrap": "nowrap",
                "-ms-flex-wrap": "nowrap",
                "flex-wrap": "nowrap",
                "-webkit-justify-content": "center",
                "-ms-flex-pack": "center",
                "justify-content": "flex-start",
                "-ms-flex-line-pack": "center",
                "align-items": "center",
            })) {
            $(bcrumbsItemRed).css("display", "none");
            $(bcrumbsItemGreen).css("display", "none");
            $(bcrumbsItemYellow).css("display", "none");
            $(bcrumbsItemRedBefore).css("display", "none");
            $(bcrumbsItemGreenBefore).css("display", "none");
            $(bcrumbsItemYellowBefore).css("display", "none");
            $(bcrumbsItemDash2).css("display", "inline-block");

        }

    });
    // $(card4).on('click', function () {
    //     if ($(bcrumbsItemBlue).css("display", "flex")) {
    //         $(bcrumbsItemRed).css("display", "none");
    //         $(bcrumbsItemGreen).css("display", "none");
    //         $(bcrumbsItemYellow).css("display", "none");
    //         $(bcrumbsItemRedBefore).css("display", "none");
    //         $(bcrumbsItemGreenBefore).css("display", "none");
    //         $(bcrumbsItemYellowBefore).css("display", "none");
    //         $(bcrumbsItemDash8).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(8)")').css("display", "none");
    //     }
    // });
    // $(trCdIt4).on('click', function () {
    //     if ($(bcrumbsItemBlue).css("display", "flex")) {
    //         $(bcrumbsItemRed).css("display", "none");
    //         $(bcrumbsItemGreen).css("display", "none");
    //         $(bcrumbsItemYellow).css("display", "none");
    //         $(bcrumbsItemRedBefore).css("display", "none");
    //         $(bcrumbsItemGreenBefore).css("display", "none");
    //         $(bcrumbsItemYellowBefore).css("display", "none");
    //         $(bcrumbsItemDash8).css("display", "inline-block");
    //         $('#breadcrumbs li:not(".dash:nth-child(8)")').css("display", "none");
    //     }
    // });



    // $(".bc_item1").on('click', function () {
    //     $('#slick-slide-control00').click();
    // });


    $('.trigger-card-btn').on('click', function () {
        $('#btn-top-box').click();
    });


    // $("a.trigger-card-link").click(function () {
    //     var _href = $(this).attr("href");
    //     $("html, body").animate({
    //         scrollTop: $(_href).offset().top + "px"
    //     });
    //     return false;
    // });

    //  код для загрузки контента чез ссылку с помощью ajax
    $(previewBoxLink).each(function () {
        var href = $(this).attr('href');
        if (hash == href.substr(0, href.length - 5)) {
            var toLoad = hash + '.html #load-content';
            $('#content-box').load(toLoad);
        }
    });
    $(previewBoxLink).on('click', function () {
        var toLoad = $(this).attr('href') + ' #load-content';
        $(contentBox).hide(100, loadContent);
        $(loader).remove();
        window.location.hash = $(this).attr('href').substr(0, $(this).attr('href').length - 5);

        function loadContent() {
            $(contentBox).load(toLoad, '', showNewContent())
        }

        function showNewContent() {
            $(contentBox).show(100);
        }

        function hideLoader() {
            $(contentBox).html("<h1>showroom</h1>");

        }

        return false;
    });

    $(bcrumbsItemFirst).on('click', function () {
        $('#slick-slide-control00').click();
        $(contentBox).css("display", "none");
        $(statusBar).css("display", "none");
    });


    $(card1).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });
    $(trCdIt1).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });
    $(card2).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });
    $(trCdIt2).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });
    $(card3).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });
    $(trCdIt3).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });
    $(card4).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });
    $(trCdIt4).on('click', function () {
        $('#content-box #load-content').html("<h1>showroom</h1>");
    });




});