function reservationanimate(){
    $('.resravtion').show(3000);
}


$(window).on('scroll',function () {
    if ($(this).scrollTop() > 2500) {
        $('.featured-cars').fadeIn(2000,function(){$(this).animate({})});
    } else {
        $('.featured-cars').fadeOut();
    }
});