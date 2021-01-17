$(".page-scroll").click(function() {
    var tujuan = $(this).attr('href')
    var elementTujuan = $(tujuan)

    $('html, body').animate({
        scrollTop: $(elementTujuan).offset().top -65
    }, 1000, 'swing');
});

 $(window).scroll(function(){
     var wScroll = $(this).scrollTop();

     $('.jumbotron img').css({
         'transform' : 'translate(0px, '+ wScroll/4 +'%)'
     })
     if(wScroll > $('.gallery').offset().top) {
         console.log('ok')
     }
 })
