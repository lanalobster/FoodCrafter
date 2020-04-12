// <Ляна>
$(document).ready(() => {
    $("div.recipe-block").hover(function(event){
        $(event.target).css('transform', 'scale(1.08)');
    },
    function(){
        $(event.target).css('transform', 'scale(1)');
    });

    $("[href].fa").hover(function(event){
        $(event.target).css('opacity', '0.7');
    },
    function(){
        $(event.target).css('opacity', '1');
    });
});
// </Ляна>