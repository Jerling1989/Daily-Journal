// CREATE HEIGHT FOR TEXTAREA BASED ON USER SCREEN HEIGHT
$('textarea').css('height', $(window).height() - 180);

// WHENEVER THE USER ENTERS A KEY
$('textarea').keyup(function() {
	// RUN UPDATEJOURNAL.PHP SCRIPT TO UPDATE JOURNAL COLUMN WITH THE VALUE OF TEXTAREA
	$.post('../php/updatejournal.php', {journal:$('textarea').val()})
});