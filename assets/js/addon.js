var navbar = $('.navbar');

$(window).on('scroll', function () {
    if ($(window).scrollTop() > 0) {
        navbar.addClass('sticky');
        navbar.css('border-bottom', '0.5px solid black');
    } else {
        navbar.removeClass('sticky');
        navbar.css('border-bottom', '0.5px solid transparent');
    }
});