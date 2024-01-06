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