<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hasil Loping</title>
</head>

<body>
<a href="form_looping.php">Back</a> <br>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nama = $_POST["nama"];
		$angka = $_POST["angka"];
		for($i=0 ; $i<$angka ; $i++){
			echo "Saya Cinta ".$nama." <br>";	
		}
	}
?>
</body>
</html>