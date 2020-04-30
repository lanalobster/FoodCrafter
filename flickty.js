"use strict";
const elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
    // options
    cellAlign: 'left',
    contain: true,
    autoPlay: true,
    wrapAround: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
    // options
});


// </Orest>
$(document).ready(() => {
    $("#button-1").mouseenter(() => {
        $("#button-1").css("border", "3px solid #f00500");
    });
    
    $("#button-1").mouseleave(() => {
        $("#button-1").css("border", "0px");
    });
});
// </Orest>