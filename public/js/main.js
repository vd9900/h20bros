$(document).ready(function () {
    "use strict";
    //IMG RANGE SLIDER
    $("#bslider").on("input change", (o) => {
        const e = o.target.value;
        $(".foreground-img").css("width", e + "%"),
            $(".slider-button").css("left", `calc(${e}% - 18px)`);
    });
    // NAVBAR JS
    const toggleButton =
        document.getElementsByClassName("hamburger__toggle")[0];
    const navbarMenu = document.getElementsByClassName("navbar-menu")[0];
    const toggleIcon = document.getElementsByClassName("hamburger__toggle")[0];

    toggleButton.addEventListener("click", (e) => {
        e.preventDefault();
        $(".custom-nav").toggleClass("mobile-fixed-nav");
        if ($(navbarMenu).hasClass("nav-active")) {
            document.body.style = "overflow:auto;max-height:auto";
            $(navbarMenu).slideUp();

            setTimeout(function () {
                $(navbarMenu).toggleClass("nav-active");
                $(".navbar-menu").removeAttr("style");
            }, 300);
        } else {
            $(navbarMenu).toggleClass("nav-active");
            $(navbarMenu).hide();
            $(navbarMenu).slideDown();
            $(".navbar-menu").removeAttr("style");
            document.body.style = "overflow:hidden;max-height:100vh";
        }

        toggleIcon.classList.toggle("toggled");
    });

    const togMob = $("ic")[0];

    togMob.addEventListener("click", (e) => {
        e.preventDefault();
        var windowsize = $(window).width();

        if (windowsize < 992) {
            $(".project").slideToggle();
            $("ic").toggleClass("up-icon");
            setTimeout(function () {
                if ($(".project").attr("style") == "display: none;") {
                    $(".project").removeAttr("style");
                }
            }, 500);
        }
    });
    //END NAVBAR JS

    //SCRIPT FOR TYPEING ANIMATION
    var text = "ENTER YOUR PHONE NUMBER";
    var delay = 220; // Delay between characters

    let iss = 0;
    function typeWriter() {
        if (iss < text.length) {
            document.querySelectorAll("#phone-input").forEach(function (ele) {
                ele.placeholder += text.charAt(iss);
            });
            iss++;
        } else {
            iss = 0;
            text = "ENTER YOUR PHONE NUMBER";
            document.querySelectorAll("#phone-input").forEach(function (ele) {
                ele.placeholder = "";
            });
        }
        setTimeout(typeWriter, delay);
    }

    typeWriter();
    //END SCRIPT FOR TYPEING ANIMATION
});
