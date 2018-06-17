// (function($){
//   CONTACT = {
//     tabs: '[data-structure="contact-tab"]',
//     panels: '[data-behavior="contact-panel"]',
//     details: '[data-structure="contact-details"]',
//     feedback: '[data-structure="contact-feedback"]',
//
//     toggle: function(toggle) {
//       if (!$(toggle).hasClass('active')) {
//         $(CONTACT.tabs).removeClass('active');
//         $(toggle).addClass('active');
//
//         var targetPanel = $(toggle).data('target');
//
//         $(CONTACT.panels).each(function(index) {
//           var thisTargetPanel = $(this).data('structure');
//
//           console.log('target panel: ', targetPanel);
//             console.log('this panel: ', thisTargetPanel);
//
//           if($(this).hasClass('hide') && (targetPanel === thisTargetPanel)) {
//
//             $(this).removeClass('hide');
//           } else {
//             $(this).addClass('hide');
//           }
//         })
//       }
//     }
//   }
//
//   $(document).ready( function() {
//     $(CONTACT.tabs).on('click', function(event){
//       console.log();
//       CONTACT.toggle(this);
//     });
//   });
// })(jQuery)
//
//
//
