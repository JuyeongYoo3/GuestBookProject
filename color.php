<?php
	$var = $_POST["h_value"];

	echo$_POST['h_value'];

	$filename = "D:/_GBP/00_GBP/GBP/data/color.txt"; 
	if (($handle = fopen($filename, "w")) !== FALSE) { 
		$text = $_POST['h_value']; 
		$text .= "\n"; 
		fwrite($handle, $text); 
		fclose($handle); 
	}

?>