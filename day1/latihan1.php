<!DOCTYPE html>
<html>
<head>
	<title>Belajar</title>
</head>
<body>
   	<?php 
   		echo "Selamat Datang di Kelas PHP Fundamental";

   		$nama = 'Bruce Wayne';//ini tipe datanya string
		$hero = "Batman";

		$umur = 35;  // integer

		$tinggi = 188.9; // float

		$pendapatan = '122663600000000';

		echo "<br /><br /> ini contoh pakai petik dua : <br />";
		echo "$nama - $hero - $umur - $tinggi - $pendapatan";

		echo "<br /><br /> ini contoh pakai petik satu : <br/>";
		echo $nama.'-'.$hero.'-'.$umur.'-'.$tinggi.'-'.$pendapatan;

   	?>

</body>
</html>