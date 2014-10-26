<?php 

function populate_slider(){
	$images = scandir('images/gallery/');

	$i = 1;

	// If there are images
	if(is_array($images)){
		foreach ($images as $key => $value) {

			// Ignore anything that doesn't qualify
			if( preg_match("{jpg|jpeg|gif|png}", strtolower($value) ) ){

				// List images
				echo '
					<li><a href="images/gallery/'.$value.'" title="Slider Image"><img id="image-'.$i.'" class="sliderImage" src="images/gallery/'.$value.'" alt="Slider Image"></a></li>
				';
				$i++;
			}
		}
	}
}