<!DOCTYPE html>
<html>
<head>
	<title>Decision Making</title>
</head>
<body>
	<?php 
		$mobil_avanza = 200000;
		$mobil_fortuner = 550000;
		$modal = 550000;

		if ($modal >= $mobil_fortuner) {
			echo 'Uang anda mencukupi untuk beli fortuner';
		} elseif ($modal >= $mobil_avanza) {
			echo 'Uang anda mencukupi untuk beli avanza';
		} else {
			echo 'Uang anda belum mencukupi untuk beli fortuner atau avanza';
		}

		echo '<br /> <br /> Menggunakan Switch Case : <br />';

		$trafficLight = 'abu2';
		echo 'input = '.$trafficLight.' <br/>';
		switch ($trafficLight) {
			case 'merah':
				echo 'Warna Merah Kendaraan Harus Berhenti';
				break;
			case 'kuning':
				echo 'Warna kuning Kendaraan Jalan Pelan-Pelan';	
				break;
			case 'hijau':
				echo 'Warna hijau Kendaraan Jalan';	
				break;
			default:
				echo 'Input Tidak Sesuai';	
				break;
		}


	?>
</body>
</html>