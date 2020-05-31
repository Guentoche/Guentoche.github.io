$(document).ready(function() {
	// send mail with ajax

	$('#sending_email').click(function(e){
		e.preventDefault();
		var data = {
			email: $('#email').val(),
			name: $('#name').val(),
			firstname: $('#firstname').val(),
			objet: $('#objet').val(),
			message: $('#message').val()
		};
		//AJAX
		$.ajax({
			url: "mail.php",
			type: 'POST',
			data: data,
			success: function(data) {
				$('#js_alert_success').css({'display' : 'block'});
				setTimeout(function(){
					$('#js_alert_success').css({'display' : 'none'});
					$('#email').val("");
					$('#name').val("");
					$('#firstname').val("");
					$('#objet').val("");
					$('#message').val("")
				}, 3000);
			},
			error: function(data) {
				$('#js_alert_danger').css({'display' : 'block'});
				setTimeout(function(){
					$('#js_alert_danger').css({'display' : 'none'});
					$('#email').val("");
					$('#name').val("");
					$('#firstname').val("");
					$('#objet').val("");
					$('#message').val("")
				}, 3000);
			}
		});
	});
});