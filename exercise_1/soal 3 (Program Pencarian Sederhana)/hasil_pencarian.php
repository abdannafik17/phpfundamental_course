<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hasil Pencarian</title>
</head>

<body>
<a href="form_person.php">Back</a> <br>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$person = trim($_POST["person"]);
		if($person == 'Mark Zukerberg'){
			echo "<h1>Nama : ".$person."</h1><br>";
			echo "<img src='img/op.png'><br>";
			echo "Perusahaan : Facebook <br>
				  Lulusan : Harvard <br>
				  Description : Merupakan Pendiri dan Pembuat Sosial Media Facebook";
		} else if($person == 'Bill Gates') {
			echo "<h1>Nama : ".$person."</h1><br>";
			echo "<img src='img/OnePiece.png'><br>";
			echo "Perusahaan : Microsoft <br>
				  Lulusan : Harvard <br>
				  Description : Merupakan Pendiri dan Pembuat Semua Produk Microsoft. Produk pertamanya adalah <br>
				  Operating System Microsoft";
		} else  {
			echo "Maaf Data Tidak Ditemukan";
		} 
	}
?>
</body>
</html>