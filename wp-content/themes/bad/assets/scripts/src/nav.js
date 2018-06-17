// (function($){
//   $(document).ready(function() {
//     var controller = null,
//         scenes = [],
//         nav = '[data-structure="primary-navigation"]',
//         scrollMagicTrigger = '[data-structure="app-container"]',
//         navLink = $(".menu a");
//
//     initScrollMagic();
//
//     function initScrollMagic() {
//       controller = new ScrollMagic.Controller();
//
//       var scene1 = new ScrollMagic.Scene({
//         triggerElement: scrollMagicTrigger,
//         triggerHook: 'onLeave',
//         reverse: true
//       })
//       .setClassToggle(nav, "frozen")
//       .addTo(controller);
//
//       scenes = [scene1];
//     }
//
//     navLink.click(function(){
//       closeModal(navLink);
//     });
//
//   });
// })(jQuery)
