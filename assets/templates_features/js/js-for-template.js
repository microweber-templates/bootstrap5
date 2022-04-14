//Add class for navigation when scroll

$(function () {
    $(document).scroll(function () {
        var $nav = $(".main .navigation-holder.not-transparent");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});



// checking for images and add class

var checkFirstSectionForNav = function () {

    var navIfHasBackground = $(".main .navigation-holder.not-transparent");

    var skip = $('.main-content').find('section').first().hasClass('mw-layout-overlay-wrapper');


    if (skip) {
        $(navIfHasBackground).removeClass('mw-nav-menu-not-transparent');
        $(navIfHasBackground).addClass('mw-nav-menu-transparent-with-image');

    } else {
        $(navIfHasBackground).removeClass('mw-nav-menu-transparent-with-image');
        $(navIfHasBackground).addClass('mw-nav-menu-not-transparent');
    }
}

$(window).on('load', function () {
    checkFirstSectionForNav();

    $(window).on('moduleLoaded', function () {
        checkFirstSectionForNav();
    });
});
