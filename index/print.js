const toPrint = (x) => {
    if (x.matches) {
        document.getElementById("main-header").style.display = 'none';
        document.getElementById("popular-recipe-block").style.display = 'none';
        document.getElementById("inspiration-block").style.display = 'none';
        document.getElementById("main-carousel").style.display = 'none';
        document.getElementById("switcher").style.display = 'none';
        document.getElementById("desciption-block").style.color = 'black';
    } else {
        document.getElementById("main-header").style.display = 'flex';
        document.getElementById("popular-recipe-block").style.display = 'flex';
        document.getElementById("inspiration-block").style.display = 'flex';
        document.getElementById("main-carousel").style.display = 'block';
        document.getElementById("switcher").style.display = 'flex';
        document.getElementById("desciption-block").style.color = '#1d737';
    }
}

var x = window.matchMedia("print");
toPrint(x);
x.addListener(toPrint);

const changePage = () => {
   document.getElementById("main-header").style.display = 'none';
   document.getElementById("popular-recipe-block").style.display = 'none';
   document.getElementById("inspiration-block").style.display = 'none';
   document.getElementById("main-carousel").style.display = 'none';
   document.getElementById("switcher").style.display = 'none';

   window.print();
}