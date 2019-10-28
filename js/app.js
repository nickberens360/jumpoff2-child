// Import components.

require('bootstrap');
import Example from './example.js';

// Initialize your components on DOM Ready.
jQuery( document ).ready(function( $ ) {

    Example.init({
        el: 'New setting'
    });


    $('.downArrow').on('click', function(e) {
        e.preventDefault();

        $('html, body').animate(
            {
                scrollTop: $($(this).attr('href')).offset().top,
            },
            500,
            'linear'
        )
    })


});

