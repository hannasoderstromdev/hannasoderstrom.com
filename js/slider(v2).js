	var numImages = 0;
	var currentImage = 1;
	var totalWidth = 0;
	var interval = null;

$(document).ready(function(){

	interval = setInterval(function() {
   		slideLeft();
   	}, 3500);

	// Establish number of images and total width
	$('.sliderImage').each(function(){
		numImages++;
		totalWidth += 602;
	});

	// Set width to fit all images
	$('#sliderInner').css('width', totalWidth + 'px');

	// EventHandler for goRight
	$('#goRight').click(function(){
		slideLeft();
		hideBtns();
	});

	// EventHandler for goLeft
	$('#goLeft').click(function(){
		slideRight();
		hideBtns();
	});

	$('#slider').mouseover(function(){
		if(interval != null)
		{
			clearInterval(interval);
		} 
	});

	$('#slider').mouseout(function(){
		interval = setInterval(function(){
			slideLeft();
		}, 3500);
	});	

	function slideLeft(){
		if(currentImage < numImages){
			$('#sliderInner').animate({'marginLeft' : '-=602px'}, 1000, 'swing');
			currentImage++;
		}
		if(currentImage == numImages){
			$('#sliderInner').animate({'marginLeft' : '+=' + totalWidth + 'px'}, 1000, 'swing');
		}
	}

	function slideRight(){
		if(currentImage > 1){
			$('#sliderInner').animate({'marginLeft' : '+=602px'}, 1000, 'swing');
			currentImage--;
		}
		$('#sliderInner').animate({'marginLeft' : '=' + totalWidth + 'px'}, 1000, 'swing');
	}

	function hideBtns(){
		// Remove button if at the end
		if(currentImage == 1){
			$('#goLeft').hide();
		} else {
			$('#goLeft').show();
		}

		if(currentImage ==numImages){
			$('#goRight').hide();
		} else {
			$('#goRight').show();
		}
	}

	hideBtns();

});