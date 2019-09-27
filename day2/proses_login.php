<?php 
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$query = mysqli_query($connect,"select * from login where username='$username' and password='$password'");
	$rs = mysqli_fetch_assoc($query);
	
	if(!empty($rs)) {
		echo 'Login Berhasil <br/><br/>';
		foreach ($rs as $key => $value) {
			echo $key.' : '.$value.'<br/>';
		}
	} else {
		echo 'Login Gagal';
	}

?>