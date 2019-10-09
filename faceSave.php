<?php

if (count($_POST) && (strpos($_POST['img'], 'data:image/png;base64') === 0)) {

	$img = $_POST['img'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = 'D:/_GBP/00_GBP/GBP/data/face.png';

	if (file_put_contents($file, $data)) {
		echo "<p>The canvas was saved as $file.</p>";
	} else {
		echo "<p>The canvas could not be saved.</p>";
	} 
}

?>