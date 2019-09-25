<!DOCTYPE html>
<html>
<head>
	<title>Do While Looping</title>
</head>
<body>
	<?php
		$i = 0; 
		$num = 0; 
		do { 
			$i++; 
		} while( $i < 10 ); 
		echo "Loop stopped at i = $i"; 

		echo '<br /> <br /> Looping Do While dgn array: <br/>';
		$siswa = array('abdan','nafik','budi','siti','jarwo');
		var_dump($siswa);
		$n = 0;
		do {
			echo $siswa[$n].'<br/>';
			$n++;
		} while ($n < count($siswa));

	?>
</body>
</html>