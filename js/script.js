
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


// Homepage --> Toggle Fullscreen Mode
$("#expand-video").on("click", function () {
    $("body").toggleClass("fullscreen");
    $("#expand-video-icon").toggleClass("icon-expand icon-close");
});


// Header --> toggle mobile icon to show menu
$(".mobile-menu #mobile-icon , #closeMobileMenu ").on("click", function () {
    $(".mobile-left-menu").toggleClass("show");
});


// Header --> toggle mobile menu to show and hide search
$("#toggle-search").on("click", function () {
    $(".search-container").toggleClass("show");
});


// Homepage --> Brand Slider
let homeBrandSlider = () => {
    $(document).ready(function () {
        $('.brand-slider').slick({
            slidesToShow: 3.3,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
        });
    });
}



// my profile --> Progress Slider
let progressSlider = () => {
    // Homepage --> Brand Slider 
    $(document).ready(function () {
        $('.progress-slider').slick({
            slidesToShow: 1.2,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
        });
    });
}

// my profile --> Progress Slider
let profileInfoSlider = () => {
    // Homepage --> Brand Slider 
    $(document).ready(function () {
        $('.profile-info-slider').slick({
            slidesToShow: 3.2,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
        });
    });
}

// sidnup get gender data
$(function () {
    $(".gender").on("click", function () {
        $(".gender").removeClass("active");
        $(this).addClass("active");
        $("#gender").val($(this).data("gander"));
    });
});

//homepage toggle left menu on big screen
$(function () {
    $("#top-header #mobile-icon , #close-left-menu").on("click", function () {
        $(".left-menu-container").toggleClass("show");
    })
});




//homepage toggle RIGHT menu
$(function () {
    $("#close-right-menu , #toggle-right-menu").on("click", function () {
        $(".right-menu-container").toggleClass("show");
        $(".arrows-container").toggleClass("d-none");
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
$(".toggle-password-container").on("click", function () {
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
        // dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        yearRange: "1922:2022",
        maxDate: '0'
    });
});

// calc age 
let calcAge = () => {
    $(document).ready(function () {
        $("input#datepicker").on("change", function () {
            let selectedDate = $(this).val();
            let selectedDateTimestamp = new Date(selectedDate);
            let todayTimestamp = new Date().valueOf();
            let dateRangeTimestamp = todayTimestamp - selectedDateTimestamp;
            let ageInYears = Math.floor(dateRangeTimestamp / 31556952000);
            console.log(` selectedDateTimestamp :  ${selectedDateTimestamp.valueOf()}`);
            console.log(` todayTimestamp        :  ${todayTimestamp.valueOf()}`);
            console.log(` dateRangeTimestamp    :  ${dateRangeTimestamp}`);
            console.log(` ageInYears   :  ${ageInYears}   `);
            $("#your-age").text(`Your Age Is ${ageInYears}`);
        });
    });
}


// open confirmation popup if valid form
$(document).ready(function () {
    $("#confirmation-btn").on("click", function () {
        let isValid = $(".signin-form").parsley().validate();
        if (isValid) {
            $('#confirmation').modal('show');
        }
    });
});

// Resend Code
let counterDownTwoMinutes = () => {
    let minutesLabel = document.getElementById("minutes");
    let secondsLabel = document.getElementById("seconds");
    let totalSeconds = 120;

    setInterval(setTime, 1000);

    function setTime() {
        if (totalSeconds > 0) {

            // console.log(totalSeconds);
            --totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds % 60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
        }
    }
    function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
            return "0" + valString;
        }
        else {
            return valString;
        }
    }
}

// Forget Password Set Via Value
$(document).ready(function () {
    $(".nav-tabs li.nav-item a").on("click", function () {
        $("#via").val($(this).data("via"));
    });
});

// Activate inputs Value
$(document).ready(function () {
    $(".num1").focus();


    $(".activate-inputs input").on("click", function () {
        $(this).select();
    })

    $(".activate-inputs input").on("keyup", function () {
        if ($(this).val()) {
            $(this).next().focus();
            $(this).next().select();
        }
        if ($(this).index() == 3) {
            $(this).blur();

            let activateCode = '';

            $(".activate-inputs input").each(function () {
                console.log($(this).val());
                activateCode += $(this).val();
            });

            $("#activate-code-input").val(activateCode);

            setTimeout(() => {
                $("#activate-code").submit();
            }, 200);

        }
    })
});

// My Interests toggle active class and value
$(document).ready(function () {
    let interestsArr = [];
    $(".interests-container button").on("click", function () {
        $(this).toggleClass("active");
        let btnValue = $(this).data("value");
        let btnValueIndex = interestsArr.indexOf(btnValue);
        if (interestsArr.includes(btnValue)) {
            interestsArr.splice(btnValueIndex, 1);
        } else {
            interestsArr.push(btnValue);
        }
        $("#my-interests-value").val(interestsArr)
    });
});

// hide success overlay
$(document).ready(function () {
    $(".action-success").on("click", function () {
        $(this).remove();
    });
});


// onError Country input reselect country code
let onErrorCountryCodeValues = () => {
    let selectedIndex = $(".country-code-container #country option:selected").index() + 1;
    let selectedHTML = $(`.country-code-container .choose-country-list a:nth-child(${selectedIndex})`).html();
    $(".country-code-container button.dropdown-toggle").html(selectedHTML);
}

// onError gender input reselect genders code
let onErrorGenderValue = () => {
    let selectedIndex = $(".genders-container #gender option:selected").index() + 1;
    $(`.genders-container .gender-list div:nth-child(${selectedIndex})`).addClass("active");
}

// Homepage share popup toggle other reason textarea
$(document).ready(function () {
    $('input[name="report-reason"]').on("change", function () {
        if ($('input[name="report-reason"]:checked').val() == 6) {
            $(".other-reason-container").addClass("d-block");
        } else {
            $(".other-reason-container").removeClass("d-block");
        }
    })
});



// Homepage --> toggle like or dislike 
$(document).ready(function () {
    $(".toggle-like-btn").on("click", function () {
        if ($(this).hasClass("icon-heart")) {
            $(this).removeClass("icon-heart");
            $(this).addClass("icon-heart-solid");
        } else {
            $(this).removeClass("icon-heart-solid");
            $(this).addClass("icon-heart");

        }
    });
});

// Homepage copy Text In Share Modal
let copyTextInShareModal = () => {
    /* Get the text field */
    var copyText = document.getElementById("copy-link");

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.innerHTML);

    $("#link-copied").fadeIn();
    setTimeout(() => {
        $("#link-copied").fadeOut();
    }, 1500);
}

// Homepage Copy Comment In Right Menu
$(document).ready(function () {
    $(".copy-comment").on("click", function () {
        let comment = $(this).parents(".one-comment").children(".name-and-comment").children(".comment").text();
        navigator.clipboard.writeText(comment);

        $(this).parents(".one-comment").children('.comment-copied').fadeIn();
        setTimeout(() => {
            $(this).parents(".one-comment").children('.comment-copied').fadeOut();
        }, 1500);
    });
});


// Homepage edit comment  
$(document).ready(function () {
    $(".edit-comment").on("click", function () {
        let comment = $(this).parents(".one-comment").children(".name-and-comment").children(".comment").text();
        $("#add-comment").val(comment);
        $("#add-comment").focus();
        $("#add-comment").select();
    })
});

// Homepage send comment
$(document).ready(function () {
    $("#send-comment").on("click", function () {
        $("#add-comment").val("");
    })
});

























// Homepage escape to exit fullsreen mode 
$(document).on('keydown', function (event) {
    if (event.key == "Escape") {
        if ($("body").hasClass("fullscreen")) {
            $("body").removeClass("fullscreen");
            $("#expand-video-icon").removeClass("icon-expand icon-close");
            $("#expand-video-icon").addClass("icon icon-expand");
        }
    }
});






// MY PROFILE --> change image container
$(document).ready(function () {
    $(".change-image-container .icon").on("click", function () {
        let image = document.getElementById("profile-image");
        let input = document.getElementById("change-profile-image");
        input.click();
        console.log(image);
        console.log(input);

        input.onchange = evt => {
            const [file] = input.files
            if (file) {
                image.src = URL.createObjectURL(file)
            }
        }

    });
});








// homepage mobile matched criteria --> init matched criteria slider
$(document).ready(function () {
    $('.matched-criteria-slider').slick({
        slidesToShow: 4.5,
        slidesToScroll: 1,
        infinite: false,
        arrows: false
    });
});







// Homepage Mobile Brand Slider
let homeMobileBrandSlider = () => {
    $(document).ready(function () {
        $('.mobile-brand-slider').slick({
            slidesToShow: 2.3,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
            swipeToSlide: 2,
        });
    });
}

// Mobile Homepage --> Show Brand Details
$(document).ready(function () {
    $(".more-btn-container").on("click", function () {
        $(".mobile-menu , .slider-next , .slider-prev").fadeOut(0);
        $(this).siblings(".mobile-brand-data").fadeIn(0);
        $(".mobile-brand-slider").slick('setPosition');
        $(".matched-criteria-slider").slick('setPosition');
    });
});

// Mobile Homepage --> Hide Brand Details
$(document).ready(function () {
    $(".mobile-brand-header .close").on("click", function () {
        $(this).parents(".mobile-brand-data").fadeOut(0);
        $(".mobile-menu , .slider-next , .slider-prev").fadeIn(0);
    });
});









































// Homepage --> init Fullscreen slider bootstrap
$('.owl-main-home-carousel').owlCarousel({
    loop: false,
    margin: 30,
    nav: true,
    items: 1,
    dots: false,
    touchDrag: false,
    mouseDrag: false,
    navText: ['<i class="slider-prev fa fa-chevron-up"></i>', '<i class="slider-next fa fa-chevron-down"></i>']
})


if ($(window).width() < 960) {
    // alert('Less than 960');



    // Homepage --> small screen --> play video on click and hide overlay
    $(document).ready(function () {
        $(".mobile-view .overlay-container").on("click", function () {
            let video = $(this).prev().get(0);
            $(this).children("img").addClass("hidden");
            $(this).fadeOut();
            video.play();
        });
    });



    // Homepage --> small screen --> stop video on click and show overlay
    $(document).ready(function () {
        $(".mobile-view .video").on("click", function () {
            $(this).next().fadeIn(200);
            $(this).next().children("img").removeClass("hidden");
        });
    });

 
    $('.owl-main-home-carousel').on('changed.owl.carousel', function (event) {

        $(".mobile-view .video").each(function () {
            $(this).get(0).pause();
            $(".overlay-container").fadeIn(200); 
        });

        setTimeout(() => {
            let video = $(".owl-item.active").children(".item").children(".carousel-item-content").children(".mobile-view").children(".video-container").children(".video");
            $(".owl-item.active").children(".item").children(".carousel-item-content").children(".mobile-view").children(".video-container").children(".overlay-container").fadeOut();
            video[0].play();
        }, 0);
    });
}

else {

    // alert('MORE than 960');

    // Homepage --> big screen --> play video on click and hide overlay
    $(document).ready(function () {
        $(".video-section .video-overlay").on("click", function () {
            let video = $(this).prev().get(0);
            $(this).children("img").addClass("hidden");
            $(this).fadeOut();
            video.play();
        });
    });

    // Homepage --> big screen --> stop video on click and show overlay
    $(document).ready(function () {
        $(".video").on("click", function () {
            $(this).next().fadeIn(200);
            $(this).next().children("img").removeClass("hidden");
            $(this).stop();
        });
    });


    // Homepage --> Toggle play video in BIG SCREEN
    $('.owl-main-home-carousel').on('changed.owl.carousel', function (event) {

        $(".video-section-content .video").each(function () {
            $(this).get(0).pause();
            $(".video-overlay").fadeIn(200);
            $(".video-overlay").children("img").removeClass("hidden");
        });

        setTimeout(() => {
            let video = $(".owl-item.active").children(".item").children(".carousel-item-content").children(".video-section").children(".video-section-content").children(".video-container").children(".video");
            $(".owl-item.active").children(".item").children(".carousel-item-content").children(".video-section").children(".video-section-content").children(".video-container").children(".video-overlay").fadeOut();
            $(".owl-item.active").children(".item").children(".carousel-item-content").children(".video-section").children(".video-section-content").children(".video-container").children(".video-overlay").children("img").addClass("hidden");
            video[0].play();
        }, 0);

    });
}







