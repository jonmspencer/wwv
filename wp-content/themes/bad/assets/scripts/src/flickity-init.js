(function($){
  function initSlider() {
    var slider = $("[data-structure='slider']");
    slider.flickity({
      cellAlign: 'left',
      contain: true,
      freeScroll: true
    });
  }

  $(document).ready(function(){
    initSlider();
  });
})(jQuery)
