function closeModal(trigger) {
  var curtain = jQuery('[data-structure="curtain"]');
  trigger.click(function() {
    curtain.fadeOut();
    jQuery('.modal').fadeOut();
  });
}

(function($){

  function loadDeferredVideo() {
    var contentDefer = $('[data-modal-defer="video"]');
    contentDefer.each(function() {
      var el = $(this),
      contentSrc = el.attr("data-src");
      el.removeClass('loading');
      el.attr("src", contentSrc);
    });
  }

  $(document).ready(function() {
    var openButton = $('[data-modal-behavior~="open"]'),
        closeButton = $('[data-modal-behavior~="close-modal"]'),
        curtain = $('[data-structure="curtain"]');

    // OPEN MODAL
    openButton.click(function() {
      var modalTarget = $(this).attr("data-modal-target"),
          modal = $('[data-modal-id="' + modalTarget + '"]');

      curtain.fadeIn();
      modal.fadeIn();
      loadDeferredVideo();

      $("html, body").animate({
        scrollTop: $(modal).offset().top-124
      }, 400);
    });


    // CLOSE MODAL
    // closeButton.click(function() {
    //   curtain.fadeOut();
    //   $('.modal').fadeOut();
    // });

    closeModal(closeButton);

  }); // END DOCUMENT READY
})(jQuery)
