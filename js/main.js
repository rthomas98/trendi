// @codekit-prepend quiet "../js/vendor/jquery-3.4.1.min.js";
// @codekit-prepend quiet "../js/vendor/modernizr-3.8.0.min.js";
// @codekit-prepend quiet "../js/bootstrap.js";

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$(document).ready(function() {
    if ($(window).scrollTop() === 0) {
        $('#main-nav').removeClass('scrolled');
    } else {
        $('#main-nav').addClass('scrolled');
    }

    $(window).scroll(function() {
        if ($(window).scrollTop() === 0) {
            $('#main-nav').removeClass('scrolled');
        } else {
            $('#main-nav').addClass('scrolled');
        }
    });
});