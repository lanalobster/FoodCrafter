
$(".change-button").click(function() {
    event.preventDefault(); 
	$.post("changepassword.php",
	{	
		psw:$("#psw").val()
	},
	function(data){
	  alert(data);
	});
	//document.forms["login-form"].submit();
});