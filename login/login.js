// <Ляна>
$(document).ready(() => {
	$("#uname").keydown(function(key){
		if(key.which == 40) {
			$("#psw").focus();
		}
	});
	$("#psw").keyup(function(key){
		if(key.which == 38) {
			$("#uname").focus();
		}
	});
});	
// </Ляна>