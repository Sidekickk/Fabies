$(document).ready(function () {
    var childLis = $('ul.nav li');
    childLis.on('click', function (e) {
        e.preventDefault();
        $('ul.nav').find('.active').removeClass('active');
        $(this).addClass('active');

        ajaxRequest(this);
    });

    function ajaxRequest(child) {
        var element = $(child).find('a');
        if (element.attr('href') !== '#') {
            $.ajax({
                url: element.attr('href'),
                success: function (response) {
                    $('.holder').html(response);
                },
            });
        }
    }
});
