$(document).ready(() => {
	$.get( "../emailsInfo/emails.php", function(data){
		data.split(" ").map((email) => {
			$('.emails')
				.append(() => {
					return $('<p>', {
						text: email
					});
				});	
		});
	});
});