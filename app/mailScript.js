$(document).ready(function() {

	$("#feedback-form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Succes");
			$("#form").trigger("reset");
		});
		return false;
	});
	
});