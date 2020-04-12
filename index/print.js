const toPrint = (x) => {
    if (x.matches) {
        $("#main-header").hide();
        $(".popular-recipe-block").hide();
        $(".inspiration-block").hide();
        $(".main-carousel").hide();
        $(".switcher").hide();
        $(".desciption-block").css("color", "black");
    } else {
        $("#main-header").show();
        $(".popular-recipe-block").show();
        $(".inspiration-block").show();
        $(".main-carousel").show();
        $(".switcher").show();
        $(".desciption-block").css("color", '#1d737');
    }
}

var x = window.matchMedia("print");
toPrint(x);
x.addListener(toPrint);

const changePage = () => {
   $("#main-header").hide();
   $("#popular-recipe-block").hide();
   $("#inspiration-block").hide();
   $("#main-carousel").hide();
   $("#switcher").hide();

   window.print();
}