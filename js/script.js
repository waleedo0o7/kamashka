// init home brand slider
if ($(window).width() < 960) {
    // alert('Less than 960');
}

else {
    // alert('More than 960');
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
}

// handel home fullscreen icon
$("#expand-video").on("click", function () {
    $("body").toggleClass("fullscreen");
    $("#expand-video-icon").toggleClass("icon-expand icon-close");
});

// handel mobile icon to show menu
$(".mobile-menu").on("click", function () {
    $(".row.top-header-content").toggleClass("show")
});

// Get Last Item Event
$('#home-video-carousel').on('slid.bs.carousel', function () {
    // alert("aaa");
    // alert("MAIN SLIDER HAS STARTED")
    let carouselItmesLenth = $("#home-video-carousel .carousel-inner").children().length;
    let ativeItem = $("#home-video-carousel .carousel-item.active").index() + 1;

    // console.log(`ativeItem : ${ativeItem} carouselItmesLenth : ${carouselItmesLenth}`);

    if (ativeItem == carouselItmesLenth) {
        // alert("This Is Last Item");
    }

})




$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})


// get gender data
$(function () {
    $(".gender").on("click", function () {
        $(".gender").removeClass("active");
        $(this).addClass("active");
        $("#genderValue").val($(this).data("gander"));

        // alert($("#genderValue").val());
    }); 
}); 

