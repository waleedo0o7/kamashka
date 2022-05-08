// Homepage --> Toggle Fullscreen Mode
$("#expand-video").on("click", function () {
    $("body").toggleClass("fullscreen");
    $("#expand-video-icon").toggleClass("icon-expand icon-close");
});

// Header --> toggle mobile icon to show menu
$(".mobile-menu .icon-menu-icon , #closeMobileMenu ").on("click", function () {
    $(".mobile-left-menu").toggleClass("show");


    let video = $(".swiper-slide-active .mobile-view .video").get(0);

    if (!video.paused) {
        $(".swiper-slide-active .mobile-view  .overlay-container").click();
    }
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
    $("#close-right-menu , i.icon-chat").on("click", function () {
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
        let price = parseInt($(this).children(".details").children("p.price-container").children("span.price").text());
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
    $(this).parents(".dropdown").children("button.dropdown-toggle").html(`<img alt="" src="${$(this).children("img").attr("src")}" /> ${$(this).text()} <i class="fa fa-caret-down"></i>`)
});

// select verification via 
$(".via").on("click", function () {
    $("#via").val($(this).data("via"));
});

// datepicker calender
// $(document).ready(function () {
//     $('#datepicker').datepicker({
//         // dateFormat: 'dd-mm-yy',
//         changeMonth: true,
//         changeYear: true,
//         yearRange: "1922:2022",
//         maxDate: '0'
//     });
// });

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
        // let isValid = $(".sign-in-form").parsley().validate();
        // if (isValid) {
        $('#confirmation').modal('show');
        // }
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
        $("#my-interests-value").val(interestsArr);
    });



    $("#select-all").on("click", function () {
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
    $(".edit-comment").on("click", function (event) {
        // $("#add-comment").val(comment);
        // $("#add-comment").focus();
        // $("#add-comment").select();

        $(event.target).closest(".one-comment").children(".name-and-comment").addClass("edit-mood");
    });

    $(".save-comment").on("click", function (event) {
        comment = $(event.target).closest(".one-comment").children(".name-and-comment").children(".edit-container").children("input").val();


        $(event.target).closest(".one-comment").children(".name-and-comment").removeClass("edit-mood");
        $(event.target).closest(".one-comment").children(".name-and-comment").children(".comment").text(comment)

    });
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

        let video = $(".swiper-slide-active .mobile-view .video").get(0);

        if (!video.paused) {
            $(".swiper-slide-active .mobile-view  .overlay-container").click();
        }
    });
});

// Mobile Homepage --> Hide Brand Details
$(document).ready(function () {
    $(".mobile-brand-header .close").on("click", function () {
        $(this).parents(".mobile-brand-data").fadeOut(0);
        $(".mobile-menu , .slider-next , .slider-prev").fadeIn(0);

        let video = $(".swiper-slide-active .mobile-view .video").get(0);

        if (video.paused) {
            $(".swiper-slide-active .mobile-view  .overlay-container").click();
        }
    });
});










































// alert('Less than 960');
if ($(window).width() < 960) {



    // Homepage --> small screen --> play video on click and hide overlay
    $(document).ready(function () {

        $(".mobile-view .overlay-container").on("click", function () {
            let video = $(this).prev().get(0);
            $(this).children("img").toggleClass("hidden");

            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }

        });
    });



    // Homepage --> small screen --> stop video on click and show overlay
    $(document).ready(function () {
        $(".mobile-view .video").on("click", function () {
            $(this).next().fadeIn(200);
            $(this).next().children("img").removeClass("hidden");
        });
    });


}

else {  // alert('MORE than 960');

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

}














let homepageMainSlider = () => {

    var HomepageMainSliderSwiper = new Swiper(".mySwiper", {
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

    if ($(window).width() < 960) { // less

        HomepageMainSliderSwiper.on('slideChange', function () {

            $(".mobile-view .video").each(function () {
                $(this).get(0).pause();
                $(".overlay-container").fadeIn(200);
            });

            setTimeout(() => {
                let video = $(".swiper-slide-active").children(".carousel-item-content").children(".mobile-view").children(".video-container").children(".video");
                $(".swiper-slide-active").children(".carousel-item-content").children(".mobile-view").children(".video-container").children(".overlay-container").children("img").addClass("hidden");
                video[0].play();
            }, 0);
        });

    } else { // more

        HomepageMainSliderSwiper.on('slideChange', function () {

            // stop all videos
            $(".video-section-content .video").each(function () {
                $(this).get(0).pause();
                $(".video-overlay").fadeIn(0);
                $(".video-overlay").children("img").removeClass("hidden");
            });

            // play active video
            setTimeout(() => {
                let video = $(".swiper-slide-active").children(".carousel-item-content").children(".video-section").children(".video-section-content").children(".video-container").children(".video");
                $(".swiper-slide-active").children(".carousel-item-content").children(".video-section").children(".video-section-content").children(".video-container").children(".video-overlay").fadeOut(0);
                $(".swiper-slide-active").children(".carousel-item-content").children(".video-section").children(".video-section-content").children(".video-container").children(".video-overlay").children("img").addClass("hidden");
                video[0].play();
            }, 0);

        });
    }
}



















if ($(window).width() < 960) {


    ////////////////////// SWIPE UP EVENT START
    $(document).ready(function () {


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

        $('.video-container').on('swipeup', function () { $(".swiper-button-next").click(); });
        $('.video-container').on('swipedown', function () { $(".swiper-button-prev").click(); });
    });
    ////////////////////// SWIPE UP EVENT END

}

else {
    // alert('More than 960');
    // handel mouse whell up and down to slide
    function wheelToSlide(event) {
        // event.preventDefault();



        if (event.path[1].classList != "brand-details-text") {

            // if (event.path[1].scrollHeight > event.path[1].clientHeight) {

            if (event.deltaY < 0) {
                $(".swiper-button-prev").click();
            }
            else {
                $(".swiper-button-next").click();
            }
            // }
        }





    }

    document.onwheel = wheelToSlide;

    // handel up and down buttons to slide
    (upAndDownToSlider = () => {
        window.addEventListener("keyup", function (event) {
            if (event.keyCode === 38) { // on click arrow Up 
                event.preventDefault();
                $(".swiper-button-next").click();
            }

            if (event.keyCode === 40) { // on click arrow Down
                event.preventDefault();
                $(".swiper-button-prev").click();
            }
        });
    })();
}






$(".brand-slider .item img").on("click", function () {
    setTimeout(() => {
        if ($("body").hasClass("fancybox-active")) {
            $(".swiper-slide-active .video").click();
            $(".swiper-slide-active .video").get(0).pause();
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
                loadingDiv2.classList.add("sbl-circ-path");

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
                var blob = new Blob([fileReader.result], { type: file.type });
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
                        loadingDiv2.classList.add("sbl-circ-path");

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


    $(".upload-btn").on("click", function () {
        $("#upload").click();
    });

    $("body").on("click", ".one-thumbnail .icon-close", function (event) {
        event.preventDefault();

        if ($(this).parent().hasClass("default")) {
            setTimeout(() => {
                console.log($(".one-thumbnail:nth-child(1)").children("img").click());
            }, 200);
        }

        $(this).parent().remove();
        $(".upload-btn").removeClass("d-none");
        $(".upload-btn-disabled").addClass("d-none");
        $(".max-limit").addClass("d-none");
    });

    $("body").on("click", ".one-thumbnail img", function (event) {
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

        $(event.target).parents(".slider-range-container").children(".slider-range-values").children(".start").text(startVal)
        $(event.target).parents(".slider-range-container").children(".slider-range-values").children(".end").text(endVal);


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


// Keyword   V1 
// $(document).ready(() => {

//     let input = document.getElementById("add-keyword-input");
//     input.addEventListener("keyup", function (event) {
//         if (event.keyCode === 13) {
//             event.preventDefault();
//             document.getElementById("add-keyword-btn").click();
//         }
//     });


//     let keywords = [];
//     $("#add-keyword-btn").on("click", function () {
//         let inputVal = $("#add-keyword-input").val();
//         if (inputVal) {
//             $(".keywords-list").append(`<div class="keyword"> ${inputVal} <i class="icon icon-close remove-keyword"></i> </div>`)
//             keywords.push(inputVal);
//             $("#keywordsFinal").val(keywords);
//             $("#add-keyword-input").val('')
//         }

//     });

//     $("body").on("click", ".remove-keyword", function () {
//         let thisIndex = $(this).parent(".keyword").index();
//         keywords.splice(thisIndex, 1);
//         $("#keywordsFinal").val(keywords);
//         setTimeout(() => {
//             $(this).parent().remove();
//         }, 100);
//     });
// });






// user profile --> manual tabs buttons

$("#shares-ads-tab2").on("click", function () {
    $("#shared-ads-tab").click();
});

$("#followers-tab2").on("click", function () {
    $("#followers-tab").click();
});

$("#Following-tab2").on("click", function () {
    $("#following-tab").click();
});




// Check If Homepage
if (window.location.pathname == '/kamashka/' || window.location.pathname == '/kamashka/home.php' || window.location.pathname == '/') {
    // Index (home) page
    $(".mobile-menu").addClass("mobile-menu-home");

} else {
    // Other page
    $(".mobile-menu").removeClass("mobile-menu-home");
}





$(".toggle-top-bar").on("click", function () {
    $(".page-content.homepage").toggleClass("with-top-bar");
    $(".top-bar.ads-manager").toggleClass("hide");
});


// Main Loader Wrapper 
$(document).ready(function () {
    $(".main-loader-wrapper").fadeOut();
});

$(document).ready(function () { 
    homeMobileBrandSlider();
    homeBrandSlider();
    homepageMainSlider();
});
