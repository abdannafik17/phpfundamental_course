<!DOCTYPE html>
<html>
<head>
	<title>Numeric Array</title>
</head>
<body>
	<?php 
		$number = array(1,2,3,4,5);

		foreach ($number as $value) {
			echo 'Value is '.$value.'<br/>';
		}
		echo '<br />';
		//second method to create array
		$n[0] = 'one';
		$n[1] = 'two';
		$n[2] = 'three';
		$n[3] = 'four';
		$n[4] = 'five';

		foreach ($n as $value) {
			echo 'Value with second method is '.$value.'<br/>';
		}
	?>
</body>
</html>