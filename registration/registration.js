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