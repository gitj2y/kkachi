
$(document).on('mouseover', '.aa', function () {
  $('.dept02').slideDown(200);
});
$(document).on('mouseover', 'div', function () {
    if (!$(this).hasClass('aa')) {
        $('.dept02').slideUp(200);
    }
});


