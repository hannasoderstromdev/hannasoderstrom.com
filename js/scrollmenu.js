$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 680) {
        $('#scrollMenu').fadeIn();
    } else {
        $('#scrollMenu').fadeOut();
    }
});