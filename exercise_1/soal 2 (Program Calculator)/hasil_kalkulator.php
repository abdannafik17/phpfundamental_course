<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hasil Kalkulator</title>
</head>

<body>
<a href="calculator.php">Back</a> <br>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$angka1 = $_POST["angka1"];
		$angka2 = $_POST["angka2"];
		$operator = $_POST["operator"];
		if($operator == '+'){
			$res = $angka1 + $angka2;
			echo "Hasil Jumlah ".$angka1." dan ".$angka2." adalah ".$res;
		} else if($operator == '-') {
			$res = $angka1 - $angka2;
			echo "Hasil Kurang ".$angka1." dan ".$angka2." adalah ".$res;
		} else if($operator == 'x') {
			$res = $angka1 * $angka2;
			echo "Hasil Kali ".$angka1." dan ".$angka2." adalah ".$res;
		} else if($operator == '/') {
			$res = $angka1 / $angka2;
			echo "Hasil Bagi ".$angka1." dan ".$angka2." adalah ".$res;
		} 		
	}
?>
</body>
</html>