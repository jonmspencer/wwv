(function($){
  $.fn.scrollTo = function(event, offset) {
    var target = $(this).attr("data-target");
    $('[data-structure="'+ target +'"]').velocity('scroll', {
      duration: 500,
      offset: offset,
      easing: 'ease-in-out'
    });

    event.preventDefault();
    event.stopPropagation();
  };

  $(document).ready(function() {
    var scrollTrigger = $('[data-behavior="scroll-to"]');
    scrollTrigger.on('click', function (event) {
      $(this).scrollTo(event);
    });
  });
})(jQuery)
