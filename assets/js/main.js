window.onload = function(){

/*$(document).ready(function() {
      $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
      });
});

// Scrolling Effect

$(window).on("scroll", function() {
      if($(window).scrollTop()) {
            $('nav').addClass('black');
      }

      else {
            $('nav').removeClass('black');
      }
});*/

$(document).ready(function(){
      $(window).scroll(function(){
          $('.header-bg').css('opacity', 1 - $(window).scrollTop()/700);
      });
  });
}