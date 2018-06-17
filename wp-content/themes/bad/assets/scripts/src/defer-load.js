(function($) {
"use strict";

  function loadDeferredContent() {
    var contentDefer = $('[data-behavior="content-defer"]');
    contentDefer.each(function() {
      var el = $(this),
      contentSrc = el.attr("data-src");
      el.removeClass('loading');
      el.attr("src", contentSrc);
      setTimeout(function(){
        var video = 'video';
        $(video).load();
        $(video).play;
        console.log("play!");
      }, 2000)
    });
  }

  function loadDeferredImage() {
    var imageDefer = $('[data-behavior~="defer-image"]');
    imageDefer.each(function() {
      var element = $(this),
      imageSource = element.attr("data-image");
      element.removeClass('loading');
      element.attr("style", "background-image: url(" + imageSource + ")");
    });
  }

  $(window).load(function() {
    loadDeferredContent();
    loadDeferredImage();
  });
})(jQuery);
