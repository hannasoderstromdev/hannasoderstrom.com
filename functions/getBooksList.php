<?php 
function getBooksList(){
	$file_handle = fopen("bookslist.csv", "r");

	while (!feof($file_handle) ) {

		$line_of_text = fgetcsv($file_handle, 1024);

		echo '<li>
				<ul class="book-item">
					<li class="book-title">' . $line_of_text[0] . '</li>
					<li class="book-description">' . $line_of_text[1] . '</li>
					<li class="book-rating">' . $line_of_text[2] . '</li>
			  	</ul>
			  </li>';

	}

	fclose($file_handle);

}