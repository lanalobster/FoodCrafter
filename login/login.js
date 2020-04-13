// <Ляна>
$(document).ready(() => {
	$("#email").keydown(function(key){
		if(key.which == 40) {
			$("#pwd").focus();
		}
	});
	$("#pwd").keyup(function(key){
		if(key.which == 38) {
			$("#email").focus();
		}
	});
});	
// </Ляна>