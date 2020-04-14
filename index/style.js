// <Ляна>
$(document).ready(() => {
    $("div.recipe-block").hover(function(event){
        $(event.target).css('transform', 'scale(1.08)');
    },
    function(){
        $(event.target).css('transform', 'scale(1)');
    });

    $("[href].auth-link").hover(function(event){
        $(event.target).css('color', '#A62500');
    },
    function(){
        $(event.target).css('color', '#1d7373');
    });
});
// </Ляна>