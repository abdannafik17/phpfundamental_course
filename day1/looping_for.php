<!DOCTYPE html>
<html>
<head>
	<title>lopping for</title>
</head>
<body>
	<?php
		$kal = 'Saya berjanji tidak akan nakal lagi';
		$n = 1;
	 	for( $i = 0; $i<5; $i++ ) { 
			echo $n++.'.'.$kal.'<br/>';
		} 

		echo '<br /> <br /> Looping dgn array: <br/>';

		$siswa = array('abdan','nafik','budi','siti','jarwo');
		for($i=0; $i < count($siswa); $i++) {
			echo $siswa[$i].'<br/>';
		}
	?>
</body>
</html>