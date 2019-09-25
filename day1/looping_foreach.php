<!DOCTYPE html>
<html>
<head>
	<title>ForEach Looping</title>
</head>
<body>
	<?php
		$array = array( 1, 2, 3, 4, 5); 
		foreach( $array as $value ) { 
			echo "Value is $value <br />"; 
		} 

		echo '<br /> <br /> Looping Foreach dgn array: <br/>';
		$siswa = array('abdan','nafik','budi','siti','jarwo');
		$val = '';
		foreach ($siswa as $rs) {
			echo $rs.'<br/>';
			if($rs == 'nafik') {
				$val=$rs;
				break;
			}
		}
		echo $val.'<br/>';

		echo '<br/> Loop dengan break <br/>';
		$i = 0; 
		while( $i < 10) { 
			$i++; 
			if( $i == 3 )
				break; 
		}
	 	echo ("Loop stopped at i = $i" ); 

	?>
</body>
</html>