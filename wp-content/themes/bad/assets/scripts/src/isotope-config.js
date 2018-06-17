// (function($){
//   ISOTOPE = {
//     grid: '[data-structure="isotope-grid"]',
//     gridItem: '[data-structure="isotope-grid-item"]',
//     gridRelayout: '[data-behavior="grid-relayout"]',
//     resizeTimer: '',
//     filterSet: '[data-structure="isotope-filters"]',
//     gridFilter: '[data-structure="grid-filter"]',
//
//
//     activate: function() {
//       // init Isotope
//       var $grid = $(ISOTOPE.grid).isotope({
//         itemSelector: ISOTOPE.gridItem,
//         percentPosition: true
//       });
//
//       // layout Isotope after each image loads
//       $grid.imagesLoaded().progress( function() {
//         $grid.isotope('layout');
//       });
//
//     },
//
//     relayout: function() {
//       $(ISOTOPE.gridRelayout).isotope('layout');
//       clearTimeout(ISOTOPE.resizeTimer);
//       ISOTOPE.resizeTimer = setTimeout(function() {
//         $(ISOTOPE.gridRelayout).isotope('layout');
//       }, 250);
//     },
//
//     destroy: function() {
//       $(ISOTOPE.grid).isotope('destroy');
//     },
//
//     filter: function(filter) {
//       var filterSetTarget = $(filter).closest(ISOTOPE.filterSet).data('target'),
//           targetGrid = '[data-grid="'+filterSetTarget+'"]',
//           filterSetListItems = '[data-target="'+filterSetTarget+'"] li';
//
//       $(filterSetListItems).each(function(index, listItem) {
//         $(listItem).removeClass('active');
//       });
//       $(filter).addClass('active');
//       var filterValue = $(filter).attr('data-filter');
//       if (filterValue == 'all') {
//         $(targetGrid).isotope({ filter: ISOTOPE.gridItem });
//       } else {
//         $(targetGrid).isotope({ filter: '[data-filter~="' + filterValue + '"]' });
//       }
//     }
//   }
//
//   $(document).ready( function() {
//     if ( $(ISOTOPE.grid).length > 0 ) {
//       ISOTOPE.activate();
//     }
//
//     $(ISOTOPE.filterSet).on( 'click', 'li', function() {
//       ISOTOPE.filter(this);
//     });
//   });
//
//   $(window).ready( function() {
//     if ( $(ISOTOPE.grid).length > 0 ) {
//       ISOTOPE.relayout();
//     }
//   }); // End window.on resize
//
// })(jQuery)
