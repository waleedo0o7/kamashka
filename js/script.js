let canSlide = true;

let homepageMainSliderSwiper

// Homepage --> init video-js library
let initVideoJs = () => {

    let videosList = document.querySelectorAll('.video-js');

    for (let i = 0; i < videosList.length; i++) {
        // console.log(videosList[i]);
        videojs(videosList[i]);
    }

}

// Homepage --> add new slider
let homeAddNewSlide = () => {

    homepageMainSliderSwiper.appendSlide([
        `
        <div class="swiper-slide">
        <div class="carousel-item-content">
    
            <div class="data-section">
    
                <div class="brand-header">
                    <div class="row">
                        <div class="col-md-2 brand-logo d-flex justify-content-center align-items-start pr-0">
                            <img alt="" class="img-fluid" src="img/person04.jpg" />
                        </div><!-- col-md-2 -->
                        <div class="col-md-4">
                            <h3> Nike <img alt="" class="img-fluid" src="img/verified.svg" /> </h3>
                            <p> Kids Campaign <br /> #zaracampaign </p>
                        </div><!-- col-md-3 -->
                        <div class="col-md-6 d-flex">
                            <div class="follow-btn">
                                <a class="btn btn-outline-primary follow" href="#"> Follow </a>
                            </div><!-- follow-btn -->
                        </div>
                    </div><!-- row -->
                </div><!-- brand-header -->
    
                <div class="brand-slider-container">
    
                    <div class="brand-slider">
    
                        <div class="item">
                            <a data-fancybox="nike-big-gallery" class=" " href="videos/video3.mp4" data-width="640" data-height="360">
                                <div class="video-item">
                                    <video playsinline>
                                        <source src="videos/video3.mp4" type="video/mp4">
                                    </video>
                                    <div class="video-overlay">
                                        <img alt="" class="img-fluid" src="img/brand-slider/play.png" />
                                    </div>
                                </div>
                            </a>
                        </div> <!-- item -->
    
                        <div class="item">
                            <a data-fancybox="nike-big-gallery" class=" " href="img/brand-slider/02.jpg">
                                <img alt="" src="img/brand-slider/02.jpg" class="img-fluid">
                            </a>
                        </div> <!-- item -->
    
                        <div class="item">
                            <a data-fancybox="nike-big-gallery" class=" " href="img/brand-slider/03.jpg">
                                <img alt="" src="img/brand-slider/03.jpg" class="img-fluid">
                            </a>
                        </div> <!-- item -->
    
                        <div class="item">
                            <a data-fancybox="nike-big-gallery" class=" " href="img/brand-slider/01.jpg">
                                <img alt="" src="img/brand-slider/01.jpg" class="img-fluid">
                            </a>
                        </div> <!-- item -->
    
                        <div class="item">
                            <a data-fancybox="nike-big-gallery" class=" " href="img/brand-slider/03.jpg">
                                <img alt="" src="img/brand-slider/03.jpg" class="img-fluid">
                            </a>
                        </div> <!-- item -->
    
                        <div class="item">
                            <a data-fancybox="nike-big-gallery" class=" " href="img/brand-slider/01.jpg">
                                <img alt="" src="img/brand-slider/01.jpg" class="img-fluid">
                            </a>
                        </div> <!-- item -->
    
                    </div> <!-- brand-slider -->
    
                </div> <!-- brand-slider-container -->
    
                <div class="text-center mb-2 mt-2">
                    <a class="btn btn-outline-primary" href="#"> discover products </a>
                </div>
    
                <div class="brand-details" id="myDIV">
                    <div class="brand-details-text stop-slide-on-scroll">
                        <h4 class="stop-slide-on-scroll"> Zara is one of the biggest international <br /> fashion companies </h4>
                        <p class="stop-slide-on-scroll"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        </p>
                    </div><!-- brand-details-text -->
    
                    <div class="buttons tags text-center mb-2 mt-2">
                        <a class="btn btn-outline-primary follow" href="#"> Fashion </a>
                        <a class="btn btn-outline-primary follow" href="#"> Beauty </a>
                    </div><!-- buttons -->
    
                    <div class="share">
                        <p class="mb-1"> SHARES </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images">
                                    <ul>
                                        <li> <a href="user-profile.php"> <img alt="" class="img-fluid" src="img/person04.jpg" /></a> </li>
                                        <li> <a href="user-profile.php"> <img alt="" class="img-fluid" src="img/person02.png" /></a> </li>
                                        <li> <a href="user-profile.php"> <img alt="" class="img-fluid" src="img/person03.png" /></a> </li>
                                        <li> <a href="user-profile.php"> <img alt="" class="img-fluid" src="img/person01.png" /></a> </li>
                                        <li> <a href="user-profile.php"> <img alt="" class="img-fluid" src="img/person02.png" /></a> </li>
                                        <li> <a href="user-profile.php">
                                                <div class="num"> +3K </div>
                                            </a> </li>
                                    </ul>
                                </div> <!-- images -->
    
                                <!-- <div class="empty-state">
                                                            <h6 class="mb-0"> No Shares Yet </h6>
                                                            <p class="mb-0"> be the first to share this adv</p>
                                                        </div> empty-state -->
    
                            </div><!-- col-md-9 -->
    
                            <div class="col-md-6 d-flex mt-2">
                                <div class="buttons text-right">
                                    <a id="share-modal-btn" class="btn btn-outline-primary" data-toggle="modal" data-target="#share-modal"> Share & Get 10 KD</a>
                                </div><!-- buttons -->
                            </div><!-- col-md-3 -->
    
                        </div><!-- row -->
                    </div><!-- share -->
    
                </div><!-- brand-details -->
    
            </div> <!-- data-section -->
    
            <div class="video-section">
                <div class="video-section-content">
    
                    <div class="icons-container">
                        <div class="video-icons">
                            <ul>
                                <li><i class="toggle-like-btn icon icon-heart"></i>
                                    <p> 1,8M </p>
                                </li>
                                <li><i class="icon icon-eye"></i>
                                    <p> 1K </p>
                                </li>
                                <li><i class="icon icon-chat "></i>
                                    <p> 11,0K </p>
                                </li>
                                <li><i class="icon icon-share"></i>
                                    <p> 1K </p>
                                </li>
                            </ul>
                        </div><!-- video-icons -->
                    </div><!-- icons -->
                    <div class="video-container">
                        <video playsinline class="video big-main-video video-js" loop controls preload="auto">
                            <source src="videos/video3.mp4" type="video/mp4">
                        </video>
                        <div class="video-overlay">
                            <img alt="" class="img-fluid" src="img/brand-slider/play.png" />
                        </div> <!-- video-overlay -->
                    </div><!-- video-container -->
    
    
                </div> <!-- video-section-content -->
    
                <div class="shadow"></div>
    
                <div class="matched-criteria-container">
    
                    <div class="dropdown custom-dropdown">
    
                        <!-- IF AUTH OPEN MODAL -->
                        <a id="matched-criteria-modal-btn" class="popup-toggle reset-btn" data-toggle="modal" data-target="#matched-criteria-modal">
                            Matched Criteria <i class="fa fa-chevron-down"></i>
                        </a>
    
                        <!-- IF NOT AUTH  -->
                        <a href="auth-sign-in.php" id="matched-criteria-modal-btn" class="popup-toggle reset-btn d-none">
                            Matched Criteria <i class="fa fa-chevron-down"></i>
                        </a>
    
                    </div> <!-- dropdown -->
    
                </div><!-- matched-criteria-container -->
    
    
            </div> <!-- video-section -->
    
            <!-- mobile view START -->
            <div class="mobile-view">
                <!-- <img src="img/brand-slider/01.jpg" style="width: 100%; height: 100%;" /> -->
                <div class="top-shadow"></div><!-- top-shadow -->
                <div class="video-container">
    
                    <video playsinline class="video video-js" loop controls preload="auto">
                        <source src="videos/video3.mp4" type="video/mp4">
                    </video>
    
                    <div class="overlay-container">
                        <img alt="" class="img-fluid" src="img/brand-slider/play.png" />
                    </div><!-- overlay-container -->
    
                    <div class="shares-container">
                        <p class="m-0"> SHARES </p>
                        <div class="images">
                            <ul>
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/person01.png" /></a> </li>
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/person02.png" /></a> </li>
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/person03.png" /></a> </li>
                                <li> <a href="#">
                                        <div class="num"> +3K </div>
                                    </a> </li>
                            </ul>
                        </div><!-- images -->
                    </div><!-- shares-container -->
    
                    <div class="like-and-comment">
                        <div class="item like">
                            <i class="icon icon-heart toggle-like-btn"></i>
                            <p> 1,8M </p>
                        </div><!-- like -->
                        <div class="item comment">
                            <i class="icon icon-chat "></i>
                            <p> 1,8M </p>
                        </div><!-- like -->
                    </div><!-- like-and-comment -->
    
                    <div class="brand-details">
    
                        <div class="image">
                            <img class="img-fluid" src="img/brand-logo.png" alt="">
    
                            <a href="#" class="like"> <i class="fa fa-plus"></i> </a>
                            
                        </div><!-- image -->
    
                        <div class="data">
                            <p class="name"> Nike <img alt="" class="img-fluid" src="img/verified.svg" /> </p>
                            <p class="slogan"> Kids Campaign </p>
                            <p class="hash"> #zaracampaign </p>
                        </div><!-- data -->
    
                    </div><!-- brand-details -->
    
    
                    <div class="more-btn-container">
                        <a class="more-details" href="#"> MORE DETAILS <i class="fa fa-arrow-right"></i> </a>
                    </div><!-- more-btn-container -->
    
                    <div class="views-and-shares">
                        <div class="item views">
                            <i class="icon icon-eye"></i>
                            <p> 1,8M </p>
                        </div><!-- like -->
                        <div class="item share">
                            <i class="icon icon-share "></i>
                            <p> 1,8M </p>
                        </div><!-- like -->
                    </div><!-- views-and-shares -->
    
                    <div class="share-btn-container">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#share-modal"> Share &amp; Get 10 KD</a>
                    </div><!-- share-btn-container -->
    
                    <div class="mobile-brand-data">
    
                        <div class="mobile-brand-header">
                            <div class="brand-logo">
                                <img alt="" class="img-fluid logo" src="img/brand-logo.png" />
                                <h3> Zara </h3>
                                <img alt="" class="img-fluid" src="img/verified.svg" />
                            </div><!-- brand-logo -->
                            <div class="close"> <i class="icon icon-close"></i> </div><!-- close -->
                        </div><!-- brand-header -->
    
    
    
    
                        <div class="mobile-brand-slider-container">
                            <div class="mobile-brand-slider">
    
                                <!-- video item -->
                                <div class="item">
                                    <a data-fancybox="zara-mobile-gallery " href="videos/video3.mp4" data-width="640" data-height="360">
                                        <div class="video-item">
                                            <video playsinline>
                                                <source src="videos/video3.mp4" type="video/mp4">
                                            </video>
                                            <div class="video-overlay">
                                                <img alt="" class="img-fluid" src="img/brand-slider/play.png" />
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- item -->
    
                                <!-- image item -->
                                <div class="item">
                                    <a data-fancybox="zara-mobile-gallery " href="img/brand-slider/02.jpg">
                                        <img alt="" src="img/brand-slider/02.jpg" class="img-fluid">
                                    </a>
                                </div> <!-- item -->
    
                                <div class="item">
                                    <a data-fancybox="zara-mobile-gallery " href="img/brand-slider/03.jpg">
                                        <img alt="" src="img/brand-slider/03.jpg" class="img-fluid">
                                    </a>
                                </div> <!-- item -->
    
                                <div class="item">
                                    <a data-fancybox="zara-mobile-gallery " href="img/brand-slider/01.jpg">
                                        <img alt="" src="img/brand-slider/01.jpg" class="img-fluid">
                                    </a>
                                </div> <!-- item -->
    
                                <div class="item">
                                    <a data-fancybox="zara-mobile-gallery " href="img/brand-slider/03.jpg">
                                        <img alt="" src="img/brand-slider/03.jpg" class="img-fluid">
                                    </a>
                                </div> <!-- item -->
    
                                <div class="item">
                                    <a data-fancybox="zara-mobile-gallery " href="img/brand-slider/01.jpg">
                                        <img alt="" src="img/brand-slider/01.jpg" class="img-fluid">
                                    </a>
                                </div> <!-- item -->
    
                            </div><!-- mobile-brand-slider -->
                        </div> <!-- brand-slider-container -->
    
    
    
    
                        <div class="text-center mb-1 mt-3 ">
                            <a class="btn  follow" href="#"> discover products </a>
                        </div>
    
    
    
    
    
                        <div class="mobile-brand-details ">
                            <div class="brand-details-text">
                                <h4> Zara is one of the biggest international <br /> fashion companies </h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation
                                </p>
                            </div><!-- brand-details-text -->
    
                            <div class="buttons tags mb-3 mt-2">
                                <a class="btn btn-outline-primary" href="#"> Fashion </a>
                                <a class="btn btn-outline-primary" href="#"> Beauty </a>
                            </div><!-- buttons -->
    
                            <div class="mobile-matched-criteria text-center">
    
                                <a data-toggle="modal" data-target="#matched-criteria-modal" class="popup-toggle btn btn-outline-primary" href="#"> Matched Criteria </a>
    
                            </div><!-- mobile-matched-criteria -->
    
                        </div><!-- brand-details -->
                    </div><!-- mobile-brand-details -->
    
                </div><!-- video-container -->
                <div class="bottom-shadow"></div><!-- bottom-shadow -->
            </div><!-- mobile view -->
            <!-- mobile view END -->
    
        </div><!-- carousel-item-content -->
    </div> <!-- swiper-slide END -->

        `
    ]);

    // console.log(' new slide added ');

    setTimeout(() => {
        homeBrandSlider();
        homeMobileBrandSlider();
        initVideoJs();
        initFancyBox();
    }, 10);

}
// Homepage --> init FancyBox
let initFancyBox = () => {
    $('[data-fancybox]').fancybox({
        loop: true
    });
}

initFancyBox();


///////////// STOP SLIDE IF BRAND SLIDER OPEN START

$(document).on("click", ".brand-slider-container a img", function () {
    setTimeout(() => {
        onRemoveMethod();
    }, 50);
})

let onRemoveMethod = () => {

    $.cleanData = (function (orig) {
        return function (elems) {
            var events, elem, i;
            for (i = 0;
                 (elem = elems[i]) != null; i++) {
                try {

                    // Only trigger remove when necessary to save time
                    events = $._data(elem, "events");
                    if (events && events.remove) {
                        $(elem).triggerHandler("remove");
                    }

                    // Http://bugs.jquery.com/ticket/8235
                } catch (e) { }
            }
            orig(elems);
        };
    })($.cleanData);

    $(".fancybox-is-open").on("remove", function () {
        canSlide = true;
    });

}

///////////// STOP SLIDE IF BRAND SLIDER OPEN END

// Homepage -->  disable scroll if popup active 
$(function () {
    $("#share-modal-btn , #create-modal-btn , #matched-criteria-modal-btn").on("click", function () {
        canSlide = false;
        // console.log("can slide is false");
    });
});

// homepage --> on close modal can slide to true 
$(document).on('hidden.bs.modal', '#share-modal , #create-modal , #matched-criteria-modal', function (e) {
    canSlide = true;
    // console.log("can slide is true");
})

// Homepage --> Toggle Fullscreen Mode
$(document).on("click", "#expand-video", function () {
    $("body").toggleClass("fullscreen");
    $("#expand-video-icon").toggleClass("icon-expand icon-close");
});

// Header --> toggle mobile icon to show menu
$(document).on("click", ".mobile-menu .icon-menu-icon-2 , #closeMobileMenu ", function () {

    $(".mobile-left-menu").toggleClass("show");

    let video = $(".swiper-slide-active .mobile-view .video video").get(0);

    if (!video.paused) {
        $(".swiper-slide-active .mobile-view  .overlay-container").click();
    }

});

// Header --> toggle mobile menu to show and hide search
$(document).on("click", "#toggle-search", function () {
    $(".search-container").toggleClass("show");
});

// Homepage --> Brand Slider
let homeBrandSlider = () => {
    $(document).ready(function () {
        $('.brand-slider').not('.slick-initialized').slick({
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

// Sign up --> get gender data
$(function () {
    $(document).on("click", ".gender", function () {
        $(".gender").removeClass("active");
        $(this).addClass("active");
        $("#gender").val($(this).data("gander"));
    });
});

// Homepage --> toggle left menu on big screen
$(function () {
    $(document).on("click", "#top-header #mobile-icon , #close-left-menu", function () {
        $(".left-menu-container").toggleClass("show");
        canSlide = !canSlide;
    })
});

// Homepage --> toggle RIGHT menu
$(function () {
    $(document).on("click", "#close-right-menu , .video-icons i.icon-chat , .mobile-view i.icon-chat", function () {
        $(".right-menu-container").toggleClass("show");
        canSlide = !canSlide;
    })
});

// Top header cart popup --> increaseCount and decreaseCount START 
function increaseCount(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    input.value = value;
    calcItemsPrice();
}

// Top header cart popup --> increaseCount and decreaseCount END
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

// Disable dropdown menu auto close
$('.disable-auto-close ').click(function (e) {
    e.stopPropagation();
});

// top bar calc cart dropdown items START
let calcItemsPrice = () => {
    let totalPrice = 0;
    let items = $(".cart-dropdown-menu li");

    if (items.length == 0) {
        $("#totalPrice").val(0);
    }

    items.each(function (index) {
        let price = parseInt($(this).children(".details").children("p.price-container").children("span.price").text());
        let count = parseInt($(this).children(".details").children("div.counter").children("input").val());
        totalPrice += price * count;
        $("#totalPrice").val(totalPrice);
    });
}

$(document).on("click", ".remove", function () {
    $(this).parent().fadeOut();
    setTimeout(() => {
        $(this).parent().remove();
        calcItemsPrice();
    }, 450);
});

calcItemsPrice();
// top bar calc cart dropdown items END

// toggle password
$(document).on("click", ".toggle-password-container", function (e) {
    if ($(this).parent(".form-group").children("input").attr("type") == 'text') {
        $(this).parent(".form-group").children("input").attr("type", "password");
        $(this).children().removeClass("icon-eye-solid-locked")
    } else {
        $(this).parent(".form-group").children("input").attr("type", "text");
        $(this).children().addClass("icon-eye-solid-locked")
    }
});

// select country
$(document).on("click", ".country-code-container .dropdown a", function () {
    $("#country").val($(this).data("value"));
    $(this).parents(".dropdown").children("button.dropdown-toggle").html(`<img alt="" src="${$(this).children("img").attr("src")}" /> ${$(this).text()} <i class="fa fa-caret-down"></i>`)
});

// select verification via 
$(document).on("click", ".via", function () {
    $("#via").val($(this).data("via"));
    // alert($("#via").val());
});

// datepicker calender
$(document).ready(function () {
    $('#datepicker , .calendar').datepicker({
        // dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        yearRange: "1922:2022",
        maxDate: '0',
        dateFormat: 'yy-mm-dd'
    });
});

// calc age 
let calcAge = () => {
    $(document).ready(function () {

        $(document).on("change", "input#datepicker", function () {
            let selectedDate = $(this).val();
            let selectedDateTimestamp = new Date(selectedDate);
            let todayTimestamp = new Date().valueOf();
            let dateRangeTimestamp = todayTimestamp - selectedDateTimestamp;
            let ageInYears = Math.floor(dateRangeTimestamp / 31556952000);
            // console.log(` selectedDateTimestamp :  ${selectedDateTimestamp.valueOf()}`);
            // console.log(` todayTimestamp        :  ${todayTimestamp.valueOf()}`);
            // console.log(` dateRangeTimestamp    :  ${dateRangeTimestamp}`);
            // console.log(` ageInYears   :  ${ageInYears}   `);
            $("#your-age").text(`Your Age Is ${ageInYears}`);
        });
    });
}

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
        } else {
            return valString;
        }
    }
}

// Forget Password Set Via Value
$(document).ready(function () {
    $(document).on("click", ".nav-tabs li.nav-item a", function () {
        $("#via").val($(this).data("via"));
    });
});

// Activate inputs Value
$(document).ready(function () {
    $(".num1").focus();


    $(document).on("click", ".activate-inputs input", function () {
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
                // console.log($(this).val());
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
    $(document).on("click", ".interests-container button", function () {
        $(this).toggleClass("active");
        let btnValue = $(this).data("value");
        let btnValueIndex = interestsArr.indexOf(btnValue);
        if (interestsArr.includes(btnValue)) {
            interestsArr.splice(btnValueIndex, 1);
        } else {
            interestsArr.push(btnValue);
        }
        $("#my-interests-value").val(interestsArr);
    });


    $(document).on("click", "#select-all", function () {
        interestsArr = [];

        if ($(this).prop("checked") == true) {
            $(".interests-container button").each((i, e) => {
                $(e).addClass("active");
                interestsArr.push($(e).data("value"));
            })
        } else {
            $(".interests-container button").each((i, e) => {
                $(e).removeClass("active");
            })

        }
        $("#my-interests-value").val(interestsArr);
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
    $(document).on("change", 'input[name="report-reason"]', function () {
        if ($('input[name="report-reason"]:checked').val() == '') {
            $(".other-reason-container").addClass("d-block");
            $(".other-reason-container textarea").attr("required", true);
        } else {
            $(".other-reason-container").removeClass("d-block");
            $(".other-reason-container textarea").attr("required", false);
        }
    })
});

// Homepage --> toggle like or dislike 
// $(document).ready(function () {
//     $(".toggle-like-btn").on("click", function () {
//         if ($(this).hasClass("icon-heart")) {
//             $(this).removeClass("icon-heart");
//             $(this).addClass("icon-heart-solid");
//         } else {
//             $(this).removeClass("icon-heart-solid");
//             $(this).addClass("icon-heart");
//         }
//     });
// });

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
let CopyCommentInRightMenu = () => {
    $(document).on("click", ".copy-comment", function () {

        let textArea = document.createElement("textarea");
        let comment = $(this).parents(".one-comment").children(".name-and-comment").children(".comment").text();
        textArea.value = comment;
        $(".right-menu-header").append(`<input id="input-to-copy" value="${comment}"></input>`)
        $("#input-to-copy").focus();
        $("#input-to-copy").select();
        $(this).parents(".one-comment").children('.comment-copied').fadeIn();
        setTimeout(() => {
            $(this).parents(".one-comment").children('.comment-copied').fadeOut();
        }, 1500);
        return new Promise((res, rej) => {
            // here the magic happens
            document.execCommand('copy') ? res() : rej();
            $("#input-to-copy").remove();
        });

    });
}

// Homepage edit comment  
$(document).ready(function () {
    $(document).on("click", ".edit-comment", function (event) {
        // $("#add-comment").val(comment);
        // $("#add-comment").focus();
        // $("#add-comment").select();

        $(event.target).closest(".one-comment").children(".name-and-comment").addClass("edit-mood");
    });

    $(document).on("click", ".save-comment", function (event) {

        comment = $(event.target).closest(".one-comment").children(".name-and-comment").children(".edit-container").children("input").val();
        $(event.target).closest(".one-comment").children(".name-and-comment").removeClass("edit-mood");
        $(event.target).closest(".one-comment").children(".name-and-comment").children(".comment").text(comment)

    });
});

// Homepage send comment
$(document).ready(function () {
    $(document).on("click", "#send-comment", function () {
        $("#add-comment").val("");
    })
});

// Homepage escape to exit fullscreen mode 
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
    $(document).on("click", ".change-image-container .icon", function () {
        let image = document.getElementById("profile-image");
        let input = document.getElementById("change-profile-image");
        input.click();
        // console.log(image);
        // console.log(input);

        input.onchange = evt => {
            const [file] = input.files
            if (file) {
                image.src = URL.createObjectURL(file)
            }
        }

    });
});

// Homepage Mobile Brand Slider
let homeMobileBrandSlider = () => {
    $(document).ready(function () {
        $('.mobile-brand-slider').not('.slick-initialized').slick({
            slidesToShow: 3.3,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
            swipeToSlide: 2,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2.3,
                    }
                },
                {
                    breakpoint: 390,
                    settings: {
                        slidesToShow: 1.3,
                    }
                },

            ]
        });
    });
}

// Mobile Homepage --> Show Brand Details
$(document).ready(function () {
    $(document).on("click", ".more-btn-container", function () {
        $(".mobile-menu").fadeOut(0);
        $(this).siblings(".mobile-brand-data").fadeIn(0);
        $(".mobile-brand-slider").slick('setPosition');
        $(".matched-criteria-slider").slick('setPosition');

        let video = $(".swiper-slide-active .mobile-view .video video").get(0);

        if (!video.paused) {
            $(".swiper-slide-active .mobile-view  .overlay-container").click();
        }
    });
});

// Mobile Homepage --> Hide Brand Details
$(document).ready(function () {
    $(document).on("click", ".mobile-brand-header .close", function () {
        $(this).parents(".mobile-brand-data").fadeOut(0);
        $(".mobile-menu").fadeIn(0);

        let video = $(".swiper-slide-active .mobile-view .video video").get(0);

        if (video.paused) {
            $(".swiper-slide-active .mobile-view  .overlay-container").click();
        }
    });
});


if ($(window).width() < 1025) { // alert('Less than 1024');

    // Homepage --> small screen --> toggle video play and stop
    $(document).ready(function () {
        $(document).on("click", ".mobile-view .overlay-container", function () {
            let video = $(this).prev().children("video").get(0);
            $(this).children("img").toggleClass("hidden");

            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    });

} else {  // alert('MORE than 960');

    // Homepage --> big screen --> toggle video play and stop
    $(document).ready(function () {

        $(document).on("click", ".video-section .video-overlay", function () {
            let video = $(this).prev().children("video").get(0);
            if (video.paused) {
                $(this).children("img").addClass("hidden");
                video.play();
            } else {
                $(this).children("img").removeClass("hidden");
                video.pause();
            }

        });
    });
}


// alert if you are in slider num 3
let appendNewPosts = () => {

    let index = $(".swiper-slide.swiper-slide-active").index();

    let slidesCount = $(".swiper-slide").length;

    let diff = slidesCount - index;

    if (diff == 4) {

        if ($('#posts-has-more-pages').length > 0) {

            let url = $('#posts-has-more-pages').data('next-page-url');

            $('#posts-has-more-pages').remove();

            $.ajax({
                url: url,
                cache: false,
                success: function (html) {

                    homepageMainSliderSwiper.appendSlide([html]);

                    setTimeout(function () {
                        homeBrandSlider();
                        homeMobileBrandSlider();
                        initVideoJs();
                        initFancyBox();
                    }, 10)


                },

            });//end of ajax call

        }
    }

}

let homepageMainSlider = () => {

    if ($(window).width() < 1025) { // less 1024px

        homepageMainSliderSwiper = new Swiper(".mySwiper", {
            direction: 'vertical',
            spaceBetween: 50,
            allowTouchMove: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        homepageMainSliderSwiper.on('slideChange', function () {

            $(".mobile-view .video").each(function () {
                if ($(this).children("video").get(0)) {
                    $(this).children("video").get(0).pause();
                }
            });

            setTimeout(() => {
                let video = $(".swiper-slide-active .mobile-view .video video");
                $(".swiper-slide-active .mobile-view .overlay-container img").addClass("hidden");
                if (video[0].currentTime) {
                    video[0].currentTime = 0;
                }
                video[0].play();
            }, 0);

            appendNewPosts();
        });

    } else { // more 960px

        homepageMainSliderSwiper = new Swiper(".mySwiper", {
            direction: 'vertical',
            spaceBetween: 50,
            allowTouchMove: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        homepageMainSliderSwiper.on('slideChange', function () {

            // stop all videos
            $(".video-section-content .video").each(function () {

                if ($(this).children("video").get(0)) {
                    $(this).children("video").get(0).pause();
                }

                $(".video-overlay").children("img").removeClass("hidden");
            });

            // play active video
            setTimeout(() => {
                let video = $(".swiper-slide-active .video video");
                $(".swiper-slide-active .video-overlay img").addClass("hidden");
                if (video[0].currentTime) {
                    video[0].currentTime = 0;
                }
                video[0].play();
            }, 0);

            appendNewPosts();

        });
    }
}


if ($(window).width() < 1025) { // less than 1024px

    ////////////////////// SWIPE UP EVENT START
    $(document).ready(function () {
        // alert("document ready  < 1024  ");

        var supportTouch = $.support.touch,
            scrollEvent = "touchmove scroll",
            touchStartEvent = supportTouch ? "touchstart" : "mousedown",
            touchStopEvent = supportTouch ? "touchend" : "mouseup",
            touchMoveEvent = supportTouch ? "touchmove" : "mousemove";
        $.event.special.swipeupdown = {
            setup: function () {
                var thisObject = this;
                var $this = $(thisObject);
                $this.bind(touchStartEvent, function (event) {
                    var data = event.originalEvent.touches ?
                            event.originalEvent.touches[0] :
                            event,
                        start = {
                            time: (new Date).getTime(),
                            coords: [data.pageX, data.pageY],
                            origin: $(event.target)
                        },
                        stop;

                    function moveHandler(event) {
                        if (!start) {
                            return;
                        }
                        var data = event.originalEvent.touches ?
                            event.originalEvent.touches[0] :
                            event;
                        stop = {
                            time: (new Date).getTime(),
                            coords: [data.pageX, data.pageY]
                        };

                        // prevent scrolling
                        if (Math.abs(start.coords[1] - stop.coords[1]) > 10) {
                            event.preventDefault();
                        }
                    }

                    $this
                        .bind(touchMoveEvent, moveHandler)
                        .one(touchStopEvent, function (event) {
                            $this.unbind(touchMoveEvent, moveHandler);
                            if (start && stop) {
                                if (stop.time - start.time < 1000 &&
                                    Math.abs(start.coords[1] - stop.coords[1]) > 30 &&
                                    Math.abs(start.coords[0] - stop.coords[0]) < 75) {
                                    start.origin
                                        .trigger("swipeupdown")
                                        .trigger(start.coords[1] > stop.coords[1] ? "swipeup" : "swipedown");
                                }
                            }
                            start = stop = undefined;
                        });
                });
            }
        };
        $.each({
            swipedown: "swipeupdown",
            swipeup: "swipeupdown"
        }, function (event, sourceEvent) {
            $.event.special[event] = {
                setup: function () {
                    $(this).bind(sourceEvent, $.noop);
                }
            };
        });

        $('.video-container').on('swipeup', function () {
            // alert("swipeup");
            // $(".swiper-button-next").click();
        });
        $('.video-container').on('swipedown', function () {
            // alert("swipedown");
            // $(".swiper-button-prev").click();
        });
    });
    ////////////////////// SWIPE UP EVENT END
} else { // alert('More than 960');

    // handel mouse wheel up and down to slide
    function wheelToSlide(event) {

        // event.preventDefault();

        // console.log(event.target.classList);

        if (event.target.classList != "stop-slide-on-scroll") {

            // console.log(event.target);

            if (event.deltaY < 0) {
                if (canSlide == true) {
                    $(".swiper-button-prev").click();
                }
            } else {
                if (canSlide == true) {
                    $(".swiper-button-next").click();
                }
            }

        }

        // console.log(event.target.classList);


    }

    document.onwheel = wheelToSlide;

    // handel up and down buttons to slide
    (upAndDownToSlider = () => {
        window.addEventListener("keyup", function (event) {
            if (event.keyCode === 38) { // on click arrow Up 
                event.preventDefault();
                if (canSlide == true) {
                    $(".swiper-button-next").click();
                }
            }

            if (event.keyCode === 40) { // on click arrow Down
                event.preventDefault();
                if (canSlide == true) {
                    $(".swiper-button-prev").click();
                }
            }
        });
    })();
}


// Homepage --> stop video if brand slider fancybox active
$(document).on("click", ".brand-slider .item img", function () {
    setTimeout(() => {
        if ($("body").hasClass("fancybox-active")) {
            $(".swiper-slide-active .video video").get(0).pause();
            $(".swiper-slide-active .video-overlay img").removeClass("hidden");


            canSlide = false;
        }
    }, 10);
});


let uploadImagesWithThumbnails = () => {

    document.getElementsByClassName('upload-with-thumbnails')[0].addEventListener('change', function (event) {
        let file = event.target.files[0];
        let fileReader = new FileReader();


        if (file.type.match('image')) {
            fileReader.onload = function () {

                let div = document.createElement("div");
                div.classList.add("one-thumbnail");
                div.classList.add("has-loading");


                let loadingDiv = document.createElement("div");
                loadingDiv.classList.add("loading-container");

                let loadingDiv2 = document.createElement("div");
                loadingDiv2.classList.add("loader");

                loadingDiv.append(loadingDiv2);

                let img = document.createElement('img');
                img.src = fileReader.result;
                img.setAttribute("asset_id", 1);

                let icon = document.createElement('a');
                icon.classList.add("icon", "icon-close");

                div.append(img);
                div.append(icon);
                div.append(loadingDiv);
                document.getElementsByClassName('thumbnails-wrapper')[0].appendChild(div);

            };
            fileReader.readAsDataURL(file);
        } else {
            fileReader.onload = function () {
                var blob = new Blob([fileReader.result], {type: file.type});
                var url = URL.createObjectURL(blob);
                var video = document.createElement('video');
                var timeupdate = function () {
                    if (snapImage()) {
                        video.removeEventListener('timeupdate', timeupdate);
                        video.pause();
                    }
                };
                video.addEventListener('loadeddata', function () {
                    if (snapImage()) {
                        video.removeEventListener('timeupdate', timeupdate);
                    }
                });
                var snapImage = function () {
                    var canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                    var image = canvas.toDataURL();
                    var success = image.length > 100000;
                    if (success) {

                        let div = document.createElement("div");
                        div.classList.add("one-thumbnail");
                        div.classList.add("has-loading");


                        let loadingDiv = document.createElement("div");
                        loadingDiv.classList.add("loading-container");

                        let loadingDiv2 = document.createElement("div");
                        loadingDiv2.classList.add("loader");

                        loadingDiv.append(loadingDiv2);


                        var img = document.createElement('img');
                        img.src = image;
                        img.setAttribute("asset_id", 1);

                        let icon = document.createElement('a');
                        icon.classList.add("icon", "icon-close");

                        div.append(img);
                        div.append(icon);
                        div.append(loadingDiv);
                        document.getElementsByClassName('thumbnails-wrapper')[0].appendChild(div);

                        URL.revokeObjectURL(url);
                    }
                    return success;
                };
                video.addEventListener('timeupdate', timeupdate);
                video.preload = 'metadata';
                video.src = url;
                // Load video in Safari / IE11
                video.muted = true;
                video.playsInline = true;
                video.play();
            };
            fileReader.readAsArrayBuffer(file);
        }


        setTimeout(() => {
            if ($(".thumbnails-wrapper").children().length >= 3) {
                $(".upload-btn").addClass("d-none");
                $(".upload-btn-disabled").removeClass("d-none");
                $(".max-limit").removeClass("d-none");
            }


            if ($(".thumbnails-wrapper").children().length == 1) {
                $(".thumbnails-wrapper").children(".one-thumbnail").first().addClass("default");

                $("#primary-asset-id").val($(".thumbnails-wrapper").children(".one-thumbnail").first().children("img").attr("asset_id"));
            }
        }, 100);

    });

    $(document).on("click", ".upload-btn", function () {
        $("#upload").click();
    });

    $(document).on("click", ".one-thumbnail .icon-close", function (event) {
        event.preventDefault();

        if ($(this).parent().hasClass("default")) {
            setTimeout(() => {
                // console.log($(".one-thumbnail:nth-child(1)").children("img").click());
            }, 200);
        }

        $(this).parent().remove();
        $(".upload-btn").removeClass("d-none");
        $(".upload-btn-disabled").addClass("d-none");
        $(".max-limit").addClass("d-none");
    });

    $(document).on("click", ".one-thumbnail img", function (event) {
        $(".one-thumbnail").removeClass("default");
        $(this).parent().addClass("default");
        $("#primary-asset-id").val($(this).attr("asset_id"));
    });

}


// init select2
$(document).ready(function () {
    $('.select2-multiple').select2();
    $('#select-main-category').select2({
        placeholder: "Select Main Category"
    });
});


// Init Slider Range
$(document).ready(() => {

    (function ($) {
        $.fn.tfRangeSlider = function (options) {
            return $(this).slider({
                range: true,
                min: 0,
                max: 100,
                values: [0, 100]
            });
        };
    })(jQuery);


    $("#sliderrange , #age-slider-range  ,  #share-slider-range").tfRangeSlider();

    $("#sliderrange , #age-slider-range  , #share-slider-range").on("slide", function (event, ui) {
        let startVal = ui.values[0];
        let endVal = ui.values[1];

        $(event.target).parents(".slider-range-container").children(".slider-range-values").children("p").children(".start").text(startVal)
        $(event.target).parents(".slider-range-container").children(".slider-range-values").children("p").children(".end").text(endVal);


        $(event.target).parents(".slider-range-container").children("#age-from").val(startVal)
        $(event.target).parents(".slider-range-container").children("#age-to").val(endVal)

        $(event.target).parents(".slider-range-container").children("#share-from").val(startVal)
        $(event.target).parents(".slider-range-container").children("#share-to").val(endVal)

    });


    $("#sliderrange-one-axis").slider({
        range: "min",
        value: 200,
        min: 1,
        max: 2000,
        slide: function (event, ui) {
            $("#budget").val(ui.value);
            $(".budget-label").text(ui.value)
        },
        create: function (event, ui) {
            setTimeout(() => {
                $("#budget").val(200);
                $(".budget-label").text(200)
            }, 100);
        }
    });


});


$(document).on("click", "#shares-ads-tab2", function () {
    $("#shared-ads-tab").click();
});

$(document).on("click", "#followers-tab2", function () {
    $("#followers-tab").click();
});

$(document).on("click", "#Following-tab2", function () {
    $("#following-tab").click();
});


$(document).on("click", ".toggle-top-bar", function () {
    $(".page-content.homepage").toggleClass("with-top-bar");
    $(".top-bar.ads-manager").toggleClass("hide");
});


// Main Loader Wrapper
$(document).ready(function () {
    $(".main-loader-wrapper").fadeOut();
});

// profile ads manager list --> show confirmation modal to toggle adv activation
let toggleAdvActivationWithModal = () => {
    $(".toggle__input").on("click", function () {
        $('#toggle-activation-adv-modal').modal('show');
        this.checked = !this.checked
        // console.log(this.checked);
        if (this.checked == false) {
            $(".are-you-sure").text("Are you sure you want to active this adv ?")
        } else {
            $(".are-you-sure").text("Are you sure you want to deactivate this adv ?")
        }
    });
}


// Discover --> intro Slider
let discoverIntroSlider = () => {
    $('.discover-intro-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,


        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>'
    });
}

// Discover --> Top 10 Followers
let topTenFollowers = () => {

    $('.top-ten-followers-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,

        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });
}

let shoppingIntroSlider = () => {

    $('.shopping-intro-slider.style-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        dots: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>'
    });


    $('.shopping-intro-slider.style-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        dots: false,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>'
    });


    $('.shopping-intro-slider.style-3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        dots: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>'
    });


    $('.shopping-intro-slider.style-4').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        dots: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>'
    });

}

let featuredStoresSlider = () => {

    $('.featured-stores-slider.style-2').slick({
        centerMode: true,
        centerPadding: '30%',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });

    $('.store-products-slider.style-3').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });


    $('.store-products-slider.style-4').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });
    $('.store-products-slider.style-5').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });
}

let todayOffersSlider = () => {

    $('.today-deals-slider.style-1').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: '<i class="fa fa-chevron-left slide-arrow prev-arrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slide-arrow next-arrow"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });

    $('.today-deals-slider.style-2').slick({
        slidesToShow: 6.3,
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1.2,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });
}

let toggleAllCategories = () => {
    $(document).on("click", "a.all-categories-btn", function () {
        $(".all-categories").addClass("show");
        $("body").addClass("no-scroll");
    });

    $(document).on("click", "#close-all-categories-btn", function () {
        $(".all-categories").removeClass("show");
        $("body").removeClass("no-scroll");
    });
}


// init zoom script for product slider
$(function () {
    $('.zoom').zoom();
});

// toggle fixed bar in product page
$(".product-details-wrapper").on('scroll', function () {
    if ($(this).scrollTop() > 180) {
        $(".fixed-bar-wrapper").addClass("show");
    } else {
        $(".fixed-bar-wrapper").removeClass("show");
    }
});

// Product Slider
let productSlider = () => {
    $(document).ready(function () {
        $('.product-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: true,
            prevArrow: "<i class='nextArrow fa fa-chevron-left'></i>",
            nextArrow: "<i class='prevArrow fa fa-chevron-right'></i>"
        });
    });
}


let openImageSliderLightbox = () => {
    $(document).ready(function () {
        $(document).on("click", ".actions-wrapper i.icon.icon-expand ", function () {
            $(".slick-active .image img").click();
        })
    });
}


$(document).ready(function () {

    // discover.php
    if ($('.discover').length > 0) {
        discoverIntroSlider();
        topTenFollowers();
    }

    // shopping.php
    if ($('.shopping').length > 0) {
        discoverIntroSlider();
        shoppingIntroSlider();
        featuredStoresSlider();
        todayOffersSlider();
        homeBrandSlider();
        toggleAllCategories();
    }


    if ($('.homepage').length > 0) {
        // homepage
        homeMobileBrandSlider();
        homeBrandSlider();
        homepageMainSlider();
        CopyCommentInRightMenu();
        initVideoJs();
    }

    // auth sign up page
    if ($('.sign-up').length > 0) {
        calcAge();
        onErrorCountryCodeValues();
        onErrorGenderValue();
    }

    // auth activate page
    if ($('.activate').length > 0) {
        counterDownTwoMinutes();
    }

    // auth change phone number page
    if ($('.country-code-container').length > 0) {
        onErrorCountryCodeValues();
    }

    // profile ads manager list page
    if ($('.ads-manager-page-list').length > 0) {
        toggleAdvActivationWithModal();
    }

    // create-adv.php
    if ($('.create-advertisement').length > 0) {
        uploadImagesWithThumbnails();
    }

    // edit-profile-1.php
    if ($('.edit-profile1').length > 0) {
        profileInfoSlider();
    }

    // edit-profile-2.php
    if ($('.edit-profile2 , .profile').length > 0) {
        onErrorGenderValue();
    }

    calcAge();
});


//////////////////// SHIPPING SCRIPT START  ////////////////////

// 
$(function () {

    $(document).on("click", "#edit-company-banner-btn", function () {
        $("#edit-company-banner-input").click();
    });

    $("#edit-company-banner-input").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#company-banner").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});


$(function () {

    $(document).on("click", "#edit-company-logo-btn", function () {
        $("#edit-company-logo-input").click();
    });

    $("#edit-company-logo-input").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#company-logo").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });

});


//////////////////// SHIPPING SCRIPT END  ////////////////////


//////////////////// SWIPE EVENTS FOR HOMEPAGE START  ////////////////////


// // swipe up
// $('.mobile-view').bind('swipeup', handler);
// function handler(event) {
//     // alert("swipeup");
//     $(".swiper-button-next").click();
// }

// // swipe down
// $('.mobile-view').bind('swipedown', handler2);
// function handler2(event) {
//     // alert("swipedown");
//     $(".swiper-button-prev").click();
// }

// // swipe right
// $('mobile-view').bind('swiperight', handler3);
// function handler3(event) {
//     // alert("swiperight");
// }

// // swipe left
// $('mobile-view').bind('swipeleft', handler4);
// function handler4(event) {
//     // alert("swipeleft");
// }


//////////////////// SWIPE EVENTS FOR HOMEPAGE END  ////////////////////