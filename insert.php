<?php
//function to echo head html
function head() { echo file_get_contents('/var/www/head.html'); }

//function to echo scripts and end of html
function scripts() { echo file_get_contents('/var/www/scripts.html'); }

//function to echo navigation bar html
function nav($fname) {
	//main html
	$nav = file_get_contents('/var/www/nav.html');

	//landmark to find where to insert $replace in $nav
	$landmark = '<ul class="nav">';
	$landmark2 = '<li class="dropdown">';

	//file dependent part of menu to be inserted in main html
	$replace = split($landmark, $nav);
	$replace = split($landmark2, $replace[1]);
	$replace = $replace[0]; 

	//code defines button as active or inactive. inserted into $replace
	$active = '<li class="active">';
	$inactive = '<li>';

	//server path and file array
	$path = '/var/www/';
	$files = array('index.php', 'about.php');

	//an array of li tags, an array of the rest and a array to merge them
	$replaceArr = explode('<li>', $replace);
	$liArr = array();
	$mergedArr = array();

	//iterates by li opening tags and sets inactive or active
	for ($i = 0; $i < count($files); $i++) {
		if ($fname == $path . $files[$i]) { array_push($liArr, $active); }
		else { array_push($liArr, $inactive); }
	}

	//loop merges li tags and the rest of menu
	for ($i = 0; $i < (count($files) + count($liArr)); $i++) {
		array_push($mergedArr, $replaceArr[$i]);
		array_push($mergedArr, $liArr[$i]);
	}

	//merged array is concated into string
	$new = implode('', $mergedArr);


	//inserts $replace in $nav
	$nav = str_replace($replace, $new, $nav);

	echo $nav;
}

//function that echos news items
function news() {
	//path name and array for files
	$path = '/var/www/news';
	$files = array();

	//open directory
	if ($dir = opendir($path)) {
		//reads file names in directory
		while (false !== ($file = readdir($dir))) { 
			if ($file != '.' && $file != '..') {
				//cuts off file extension
				$value = rtrim($file, '.html');
				//adds name to array if a number
				if (is_numeric($value)) { $files[$file] = $value; }
			}
		}
		
		//sorts array according to numeric filename
		asort($files);

		//prints files in order
		foreach ($files as $file => $value) { echo file_get_contents($path . '/' . $file); }

		//close directory		
		closedir($dir);
	}
}
?>
