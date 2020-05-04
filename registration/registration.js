// </Orest>
$("input").focus(function() {
	$(this).css("color", "black");
});

$("input").blur(function() {
	$(this).css("color", "grey");
});
// </Orest>

// <Ляна>
$("#generate-button").click(function(){
	var xhttp;
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	} else {
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	 xhttp.onreadystatechange = function() {
	 if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("nick-name").value = this.responseText;
	}
	};
		xhttp.open("GET", "./generateNick.php", true);
		xhttp.send();
  });
// </Ляна>

// <Ляна>
const changeInputColor = () =>{
	$(document).ready(() => {
		$("input").each(function(){
			if($(this).val() == "")
				$(this).css('backgroundColor', '#FF7B40');
		})	
	});
}

$(document).ready(() => {
	$("input").change(function(){
		$(this).css('backgroundColor', 'white');
	})	
});
// </Ляна>
const isPswValid = () => {
	let form = document.forms["registration-form"];
	if (form.psw.value != form.pswRepeat.value) {
		alert('Паролі не співпадають!');
		return false;
	} else {
		return true;
	}
};

const isEmailValid = () => {
	let form = document.forms["registration-form"]; 
	let text = form.email.value;
	let emailRE = /\S+@\S+\.\S+/;
	if (emailRE.test(text)) {
	  return true; 
	} else {
	  alert( "Неправильний формат пошти" );
	  return false;
	}
};
//НОВЕ
const isValid = () => {
	changeInputColor();
	if (!isEmailValid()) {
		return false;
	} else if (!isPswValid()) {
		return false;
	} else if(isAnyFieldEmpty()) {
		return false;
	}
	// $.ajax({
    //     type: "post",
	// 	url: "addUsers.php",
	// 	data: `nickName=${$(".nickName").val()}`,
    //     async: false,
    //     success : function(data) {
	// 		console.log(data);
    //     }
	// });
	$.post("addUsers.php",
	{	
		nickName:$(".nickName").val(),
		email:$(".email").val(),
		psw:$(".psw").val()
	});
	document.forms["registration-form"].submit();
};
//НОВЕ

const isAnyFieldEmpty = () =>{
	let isEmpty = false;
	$("input").each(function(){
			if($(this).val() == "") {
				isEmpty = true;
			
				return false;
			}
	});	
	if(!isEmpty) {
		return false;
	} else {
		alert("Будь ласка, заповніть всі поля");
		return true;
	}
};