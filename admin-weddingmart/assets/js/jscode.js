$(document).ready(function(){
    $('.hasDrop').click(function(event) {
        $(this).addClass('active');
        event.stopPropagation();
    });
    $('body').click(function(event) {
        $('.hasDrop').removeClass('active');
    });
    $('.dropdown a').click(function(){
        $(this).next('ul').slideToggle();
        $(this).parent('.dropdown').toggleClass('opened');
    })
});