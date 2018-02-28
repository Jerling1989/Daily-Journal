
$('textarea').css('height', $(window).height() - 180);

$('textarea').keyup(function() {
	$.post('../php/updatejournal.php', {journal:$('textarea').val()})
});