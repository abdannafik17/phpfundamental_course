<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<a href="grade.php">Back</a> <br>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$grade = $_POST["grade"];
		if($grade >= 60 && $grade <= 69){
			$result = 'C';
		} else if($grade >= 70 && $grade <= 79) {
			$result = 'B';
		} else if($grade >= 80 && $grade <= 100) {
			$result = 'A';
		} else if($grade < 60) {
			$result = 'Anda Tidak Lulus';
		}
	}
?>
Hasil Grade: <input type="text" name="grade" value="<?php echo $result; ?>">
</body>
</html>