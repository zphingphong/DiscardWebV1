/**
 * Created by z on 2015-04-20.
 */

$(function () {
    $('.nav a').on('click', function () {
        if ($('button.navbar-toggle').css('display') != 'none') {
            $('.navbar-toggle').click();
        }
    });
});
