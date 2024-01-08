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

$('.card-header').click(function () {
    // Find all .toggleplus elements in the document
    var allToggleElements = $('.toggleplus');

    // Set all toggle symbols to +
    allToggleElements.text('+');

    // Find the .toggleplus element inside the clicked card-header
    var toggleElement = $(this).find('.toggleplus');

    // Toggle the symbol for the clicked card-header
    toggleElement.text(toggleElement.text() == '+' ? '-' : '+');
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
});
