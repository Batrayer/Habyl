console.log('form');
$('.input-text').focusin(function() {
	$label = $(this).parent('label');
	$label.animate({"top":-25+"px"},800);
});

$('.input-text').on('focusout', function() {
	console.log('focusout');
});