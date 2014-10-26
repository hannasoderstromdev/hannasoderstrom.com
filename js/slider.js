$(document).ready(function(){

	//Autoslide on/off
	var autoslide = 1;

	//Pause on/off hover
	var hoverpause = 1;

	//Slide interval delay in milliseconds
	var autoslideinterval = 3500;

	// Set up the loop
	$('#slider-inner li:first').before($('#slider-inner li:last'));

	// Is autoslide on?
	if (autoslide == 1) {
		var slidetimer = setInterval('slide("right")', autoslideinterval);
	}

	// Is it paused?
	if (hoverpause == 1) {
		
		// Kill the autoslide when mouse is over the slider
		$('#slider').hover(function() {
			clearInterval(slidetimer)
		}, function() {
		// Put it back on when the mouse leaves the slider
			slidetimer = setInterval('slide("right")', autoslideinterval); 
		});
	}
});


//Slide function
function slide(where) {

	// Set the slide speed (milliseconds)
	var slideSpeed = 500;
	
	// Define width of each item
	var itemWidth = $('#slider-inner li').outerWidth();
	
	// Check direction
	if (where == 'left') {
		// Add or subtract width depending on direction		
		var leftIndent = parseInt($('#slider-inner').css('left')) + itemWidth;
	} else {
		var leftIndent = parseInt($('#slider-inner').css('left')) - itemWidth;
	}

	// Make sure no animation is in progress to avoid double slideing
	$('#slider-inner:not(:animated)').animate({'left': leftIndent}, slideSpeed, function() {
		
		// Make it loop
		if (where == 'left') {
			$('#slider-inner li:first').before($('#slider-inner li:last'));
		} else {
			$('#slider-inner li:last').after($('#slider-inner li:first'));
		}
		// Reset position to avoid going of screen
		$('#slider-inner').css({'left' : '-' + itemWidth + 'px'});
	});
}