// (function($){
//   $(document).ready(function(){
//
//     var parent = $(".menu-item-has-children"),
//         subMenu = ".sub-menu",
//         mobileBreak = 840;
//
//     parent.hover( function() {
//       if( $(window).width() > mobileBreak ) {
//
//         var element = $(this);
//         clearTimeout(element.data("leaveHoverTimeout"));
//         var hoverTimeout = setTimeout( function(){
//           element.children(subMenu).fadeIn();
//           element.children("a").addClass("hovered");
//         }, 100);
//         element.data('hoverTimeout', hoverTimeout);
//       }
//     }, function(){
//       var subMenu = ".sub-menu";
//       if( $(window).width() > mobileBreak ) {
//         var element = $(this);
//         var subMenu = element.children(subMenu);
//         clearTimeout(element.data("hoverTimeout"));
//         var leaveHoverTimeout = setTimeout(function(){
//           element.children("a").removeClass("hovered");
//           subMenu.fadeOut( function(){
//             subMenu.removeAttr("style");
//           });
//         }, 400);
//         element.data("leaveHoverTimeout", leaveHoverTimeout);
//       }
//     });
//
//   });
// })(jQuery)
