<!DOCTYPE html>
<html>
<head>
	<title>While Looping</title>
</head>
<body>
	<?php
		$i = 0; 
		$num = 50; 
		while( $i < 10) { 
			$num--; 
			$i++;
		 } 	
		echo "Loop stopped at i = $i and num = $num";

		echo '<br /> <br /> Looping While dgn array: <br/>';

		$siswa = array('abdan','nafik','budi','siti','jarwo');
		$n=0;
		while($n < count($siswa)) {
			echo $siswa[$n].'<br/>';
			$n++;
		}

	?>
</body>
</html>