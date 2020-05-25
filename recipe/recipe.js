// <Ляна>
$(document).ready(() => {
	$(".recipe-title-block").click(function(){
        $(".stage-description").slideToggle();
    });

    let imgHeight = document.getElementById("cocoa-image").height;
    let imgWidth = document.getElementById("cocoa-image").width;

    $(".cocoa-image").hover(function(){
        $(".cocoa-image").animate({
            height: imgHeight * 1.5,
            width: imgWidth * 1.5
        });
    },
    function(){
        $(".cocoa-image").animate({
            height: 200,
            width: 400
        });
    });
});	
// </Ляна>