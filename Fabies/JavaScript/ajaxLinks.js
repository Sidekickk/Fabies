$('.ajaxLink').on('click', function (e) {
    var _this = this;
    e.preventDefault();
    $('ul.nav').find('.active').removeClass('active');
    $.ajax({
        url: $(_this).attr('href'),
        success: function (response) {
            $('.holder').html(response);
        }
    });
});
