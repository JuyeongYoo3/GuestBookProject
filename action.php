<?php
	//echo$_POST['Name'];

	$filename = "D:/_GBP/00_GBP/GBP/data/name.txt"; 
		if (($handle = fopen($filename, "w")) !== FALSE) { 
			$text = $_POST['Name']; 
			$text .= "\n"; 
			fwrite($handle, $text); 
			fclose($handle); 
	}

?>