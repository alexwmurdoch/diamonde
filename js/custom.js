/**
 * File custom.js.
 *
 * Theme custom enhancements
 *
 */

jQuery(document).ready(function($) {

    "use strict";

    // initialize Isotope after all images have loaded
    var $container = $('#portfolio-items').imagesLoaded( function() {
        $container.isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows'
        });
    });

    // filter items on button click
    $('#filters').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $container.isotope({ filter: filterValue });
    });

});