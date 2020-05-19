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

$(".login-form").submit(function(){
	event.preventDefault(); 
	var formData = $( this ).serialize();
	console.log(formData);
	$.get( "confirmLogin.php", formData, function(data) 
	{
		if(data)
			$(".test").html(data);
		else
			$(".login-form").submit();		
	});
});