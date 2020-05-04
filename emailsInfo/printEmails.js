$(document).ready(() => {
	var xhttp;
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	} else {
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		this.responseText.split(" ").map((email) => {
			$('.emails')
				.append(() => {
					return $('<p>', {
						text: email
					});
				});
		});
	}
	};
	xhttp.open("GET", "../emailsInfo/emails.php", true);
	xhttp.send();
});