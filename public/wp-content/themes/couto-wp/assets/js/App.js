(function($) {
  $( document ).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      responsive:{
          0:{
              items:1 , 
              nav:true
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })
});
})(jQuery);