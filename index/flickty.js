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

document.getElementById("button-1").addEventListener("mouseover", ev => {
    document.getElementById('button-1').style.border = 
    '3px solid #f00500'
});
document.getElementById("button-1").addEventListener("mouseout", ev => {
    document.getElementById('button-1').style.border = 
    '0px'
});
