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

// homepage Get Last Item Event
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

// homepage owl carousel
$('.owl-carousel').owlCarousel({
    loop: false,
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

// homepage lightbox 
jQuery(document).ready(function ($) {
    $('.chocolat-parent').Chocolat();
});

// sidnup get gender data
$(function () {
    $(".gender").on("click", function () {
        $(".gender").removeClass("active");
        $(this).addClass("active");
        $("#gender").val($(this).data("gander"));
    });
});

//homepage toggle left menu
$(function () {
    $("#top-header #mobile-icon , #close-left-menu").on("click", function () {
        $(".left-menu-container").toggleClass("show");
    })
});

// top header cart popup --> increaseCount and decreaseCount START 
function increaseCount(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    input.value = value;
    calcItemsPrice();
}

function decreaseCount(a, b) {
    var input = b.nextElementSibling;
    var value = parseInt(input.value, 10);
    if (value > 1) {
        value = isNaN(value) ? 0 : value;
        value--;
        input.value = value;
    }
    calcItemsPrice();
}

// top header cart popup --> increaseCount and decreaseCount END

// disaple dropdown menu auto close
$('.disable-auto-close ').click(function (e) {
    e.stopPropagation();
});

// topbar calc cart dropdown items START

let calcItemsPrice = () => {
    let totalPrice = 0;
    let items = $(".cart-dropdown-menu li");

    if (items.length == 0) {
        $("#totalPrice").val(0);
    }

    items.each(function (index) {
        let price = parseInt($(this).children(".details").children("p.price-container").children("span#price").text());
        let count = parseInt($(this).children(".details").children("div.counter").children("input").val());
        totalPrice += price * count;
        $("#totalPrice").val(totalPrice);
    });
}

$(".remove").on("click", function () {
    $(this).parent().fadeOut();
    setTimeout(() => {
        $(this).parent().remove();
        calcItemsPrice();
    }, 450);
});
calcItemsPrice();

// topbar calc cart dropdown items END

// toggle password
$("#toggle-password").on("click", function () {
    if ($(this).parent(".form-group").children("input").attr("type") == 'text') {
        $(this).parent(".form-group").children("input").attr("type", "password");
    } else {
        $(this).parent(".form-group").children("input").attr("type", "text");
    }
});

// select country
$(".country-code-container .dropdown a").on("click", function () {
    $("#country").val($(this).data("value"));
    $(this).parents(".dropdown").children("button.dropdown-toggle").html(`<img src="${$(this).children("img").attr("src")}" /> ${$(this).text()} <i class="fa fa-caret-down"></i>`)
});

// select verification via 
$(".via").on("click", function () {
    $("#via").val($(this).data("via"));
});

// datepicker calender
$(document).ready(function () {
    $('#datepicker').datepicker({
        format: 'dd-mm-yyyy',
        startDate: '+1d'
    });
});