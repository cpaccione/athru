( function( $ ) {

    let nav  = $('nav');

    // $(window).resize(function() {
    //   let innerWidth = $(window).width();
    //   console.log(innerWidth);
    // })

    if(nav.length) {
      console.log('The white banner is on this page!');
    $(window).scroll(function() {
  
      let height = $(window).scrollTop();
      //console.log(height);
     // let bannerMain = $('.main-nav');
      //console.log(banner);
  
      //console.log(banner);
  
      if(height > 250) {
        //console.log('The height is greater than 40');
        $(nav).addClass('z-50 sticky top-0 animate__animated animate__fadeInDown');
        // $(bannerMain).addClass('sticky top-0 animate__animated animate__fadeInDown');
        // $(bannerMain).removeClass('absolute inset-x-0 top-11');
  
      } else {
        //console.log('The height is less then 40');
        $(nav).removeClass('sticky top-0 animate__animated animate__fadeInDown');
        // $(bannerMain).removeClass('sticky top-0 animate__animated animate__fadeInDown');
        // $(bannerMain).addClass('absolute inset-x-0 top-11');
      }
    });
  };


}( jQuery ) );

animate__fadeInDown