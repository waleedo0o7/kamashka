
// init home brand slider
$('.home-brand-slider').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 300,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

// handel up and down buttons to slide
(upAndDownToSlider = () => {
    window.addEventListener("keyup", function (event) {
        if (event.keyCode === 38) { // on click arrow Up 
            event.preventDefault();
            $("a.carousel-control-next").click();
        }

        if (event.keyCode === 40) { // on click arrow Down
            event.preventDefault();
            $("a.carousel-control-prev").click();
        }
    });
})();

// handel home fullscreen icon
$("#expand-video").on("click", function () {
    $("body").toggleClass("fullscreen");
    $("#expand-video-icon").toggleClass("icon-expand icon-close");
});

// handel mouse whell up and down to slide
function wheelToSlide(event) {
    event.preventDefault();

    if (event.deltaY < 0) {
        $("a.carousel-control-prev").click();
    }
    else {
        $("a.carousel-control-next").click();
    }
}
document.onwheel = wheelToSlide;

// handel mobile icon to show menu

$(".mobile-menu").on("click", function () {
    $(".row.top-header-content").toggleClass("show")
});
