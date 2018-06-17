(function($){

  function resetMenu() {
    $('#menu-primary-navigation').removeAttr("style");
    $('a.menu-button').removeClass('open');
  }

  $(document).ready(function() {

    // MENU ICON / MOBILE MENU
    $('a.menu-button').click(function(e) {
      var icon = $(this);
      var nav = $('#menu-primary-navigation');
      clearTimeout($(this).data('menuTime'));
      var menuTime = setTimeout(function() {
        if (nav.is(':visible')) {
          icon.removeClass('open');
          nav.velocity("fadeOut", { duration: 100 });
        } else {
          nav.velocity("fadeIn", { duration: 200, display: "flex" });
          icon.addClass('open');
        }
      }, 300);
      $(this).data('menuTime', menuTime);
      e.preventDefault();
    });

    // MENU RESET
    $(window).resize(function() {
      if ($(window).width() > 680) {
        resetMenu();
      }
    }); // END WINDOW RESIZE

    // Link click reset
    $('.menu-item > a').click(function(){
      resetMenu();
    });

  });

})(jQuery)
