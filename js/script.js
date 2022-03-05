(function () {
    "use strict";
    
    function responsiveImage() {

        var i,
            imgResponsive = document.querySelectorAll('img');

        for (i = 0; i < imgResponsive.length; i++ ) {
            imgResponsive[i].classList += " img-fluid";
        }

    }

  responsiveImage();

  var navButton = document.querySelector('.mobile-menu'),
      closeButton = document.querySelector('.closebtn');
  console.log(navButton);
  console.log(closeButton);

  function openNav() {
      document.getElementById("myNav").style.height = "100%";
  }

  navButton.addEventListener('click', openNav);


  function closeNav() {
    var x = document.getElementById("myNav");
    //var z = document.querySelectorAll("myNav");
    // var z = document.querySelector('link');
    x.style.height = "0%";
  //  z.style.height = "0%";
    //.querySelector("myNav").style.height = "0%";
  }

  closeButton.addEventListener('click', closeNav);
  
  AOS.init({
    duration: 1500
  });
    
})();