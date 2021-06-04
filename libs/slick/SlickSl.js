$('.slickslid').slick({
   asNavFor: '.slicknav'
});
$('.slicknav').slick({
    asNavFor: '.slickslid',
    slidesToShow: 1,


    dots: false,
    centerMode: true,
    centerPadding: '20px',
    focusOnSelect: true,
    arrows: false,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                 slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 609,
            settings: {
                slidesToShow: 1,
                 slidesToScroll: 3,
                dots: false

            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                 slidesToScroll: 3,
                dots: false
            }
        }
    ]
});

/*$('.slickslid').slick({
    autoplay: trye,
    autoplaySpeed: 3000,
    cssEase: 'ease',
    arrows: true,
    asNavFor: '.slicknav'
});
$('.slicknav').slick({
    dots: true,
    slidesToShow: 7,
    centerMode: true,
    centerPadding: '40px',
    asNavFor: '.slickslid',
    focusOnSelect: true,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 7,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
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
});*/