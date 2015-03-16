jQuery( document ).ready(function( $ ) {

	//alert("loaded");

	$("#myForm").submit(function() {
		$.post('includes/sendMail.php', {name: $('#name').val(), email: $('#email').val(), message: $('#message').val(), myFormSubmitted: 'yes'}, function(data) {
			$("#formResponse").html(data).fadeIn('100');
			$('#name, #email, #message').val(''); /* Clear the inputs */
		}, 'text');
		return false;
	});

});