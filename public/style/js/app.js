$(function(){
    $('.mobile-menu-toggler').click(function (e) {
        e.preventDefault();
        $('.mobile-menu-cover').fadeIn();
    });
    $('.menu-close').click(function () {
        $('.mobile-menu-cover').fadeOut();
    });

});