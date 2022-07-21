let canSlide = true;

// Homepage -->  disable scroll if popup active 
$(function () {
    $("#share-modal-btn , #create-modal-btn , #matched-criteria-modal-btn").on("click", function () {
        canSlide = false;
        console.log("can slide is false");
    });
});

$(document).on('hidden.bs.modal', '#share-modal , #create-modal , #matched-criteria-modal', function (e) {
    canSlide = true;
    console.log("can slide is true");
})




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


// Homepage --> Toggle Fullscreen Mode
$("#expand-video").on("click", function () {
    $("body").toggleClass("fullscreen");
    $("#expand-video-icon").toggleClass("icon-expand icon-close");
});

// Fancybox options

if ($('.fancybox').length > 0) {
    $(".fancybox").fancybox({
        // API options
        loop: true
    });
}


// Header --> toggle mobile icon to show menu
$(".mobile-menu .icon-menu-icon-2 , #closeMobileMenu ").on("click", function () {

    $(".mobile-left-menu").toggleClass("show");

    let video = $(".swiper-slide-active .mobile-view .video video").get(0);

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

// sign up --> get gender data
$(function () {
    $(".gender").on("click", function () {
        $(".gender").removeClass("active");
        $(this).addClass("active");
        $("#gender").val($(this).data("gander"));
    });
});

// homepage --> toggle left menu on big screen
$(function () {
    $("#top-header #mobile-icon , #close-left-menu").on("click", function () {
        $(".left-menu-container").toggleClass("show");
        canSlide = !canSlide;
    })
});

// Homepage --> toggle RIGHT menu
$(function () {
    $("#close-right-menu , .video-icons i.icon-chat , .mobile-view i.icon-chat").on("click", function () {
        $(".right-menu-container").toggleClass("show");
        canSlide = !canSlide;
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

// disable dropdown menu auto close
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

$(".remove").on("click", function () {
    $(this).parent().fadeOut();
    setTimeout(() => {
        $(this).parent().remove();
        calcItemsPrice();
    }, 450);
});
calcItemsPrice();
// top bar calc cart dropdown items END

// toggle password
$(".toggle-password-container").on("click", function (e) {
    if ($(this).parent(".form-group").children("input").attr("type") == 'text') {
        $(this).parent(".form-group").children("input").attr("type", "password");
        $(this).children().removeClass("icon-eye-solid-locked")
    } else {
        $(this).parent(".form-group").children("input").attr("type", "text");
        $(this).children().addClass("icon-eye-solid-locked")
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
    $("#send-comment").on("click", function () {
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
    $(".mobile-brand-header .close").on("click", function () {
        $(this).parents(".mobile-brand-data").fadeOut(0);
        $(".mobile-menu").fadeIn(0);

        let video = $(".swiper-slide-active .mobile-view .video video").get(0);

        if (video.paused) {
            $(".swiper-slide-active .mobile-view  .overlay-container").click();
        }
    });
});











































if ($(window).width() < 960) { // alert('Less than 960');

    // Homepage --> small screen --> toggle video play and stop
    $(document).ready(function () {
        $(".mobile-view .overlay-container").on("click", function () {
            let video = $(this).prev().children("video").get(0);
            $(this).children("img").toggleClass("hidden");

            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    });

}

else {  // alert('MORE than 960');

    // Homepage --> big screen --> toggle video play and stop
    $(document).ready(function () {

        $(".video-section .video-overlay").on("click", function () {
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

    if ($(window).width() < 960) { // less 960px

        HomepageMainSliderSwiper.on('slideChange', function () {

            $(".mobile-view .video").each(function () {
                $(this).children("video").get(0).pause();
            });

            setTimeout(() => {
                let video = $(".swiper-slide-active .mobile-view .video video");
                $(".swiper-slide-active .mobile-view .overlay-container img").addClass("hidden");
                video[0].play();
            }, 0);
        });

    } else { // more 960px

        HomepageMainSliderSwiper.on('slideChange', function () {

            // stop all videos
            $(".video-section-content .video").each(function () {
                $(this).children("video").get(0).pause();
                $(".video-overlay").children("img").removeClass("hidden");
            });

            // play active video
            setTimeout(() => {
                let video = $(".swiper-slide-active .video video");
                $(".swiper-slide-active .video-overlay img").addClass("hidden");
                video[0].play();
            }, 0);

        });
    }
}



















if ($(window).width() < 960) { // less than 960px 

    ////////////////////// SWIPE UP EVENT START
    $(document).ready(function () {
        // alert("document ready  < 960  ");

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
            $(".swiper-button-next").click();
        });
        $('.video-container').on('swipedown', function () {
            // alert("swipedown");
            $(".swiper-button-prev").click();
        });
    });
    ////////////////////// SWIPE UP EVENT END
}

else { // alert('More than 960');

    // handel mouse wheel up and down to slide
    function wheelToSlide(event) {
        // event.preventDefault();

        // console.log(event.target.classList);

        if (event.target.classList != "brand-details-text") {

            // alert(event.deltaY);

            if (event.deltaY < 0) {
                if (canSlide == true) {
                    $(".swiper-button-prev").click();
                }
            }
            else {
                if (canSlide == true) {
                    $(".swiper-button-next").click();
                }
            }

        }





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
$(".brand-slider .item img").on("click", function () {
    setTimeout(() => {
        if ($("body").hasClass("fancybox-active")) {
            $(".swiper-slide-active .video video").get(0).pause();
            $(".swiper-slide-active .video-overlay img").removeClass("hidden")
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


$("#shares-ads-tab2").on("click", function () {
    $("#shared-ads-tab").click();
});

$("#followers-tab2").on("click", function () {
    $("#followers-tab").click();
});

$("#Following-tab2").on("click", function () {
    $("#following-tab").click();
});




$(".toggle-top-bar").on("click", function () {
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
        console.log(this.checked);
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
    $("a.all-categories-btn").on("click", function () {
        $(".all-categories").addClass("show");
        $("body").addClass("no-scroll");
    });

    $("#close-all-categories-btn").on("click", function () {
        $(".all-categories").removeClass("show");
        $("body").removeClass("no-scroll");
    });
}



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
        $(".actions-wrapper i.icon.icon-expand ").on("click", function () {
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

    $("#edit-company-banner-btn").on("click", function () {
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

    $("#edit-company-logo-btn").on("click", function () {
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