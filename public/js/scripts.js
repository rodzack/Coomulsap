$('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    console.log($($(this).attr('href')))

    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
    }, 500, 'linear');
});