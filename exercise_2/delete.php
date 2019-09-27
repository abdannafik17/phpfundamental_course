<?php
// include database connection file
include_once("../day3/koneksi.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($connect, "DELETE FROM pegawai WHERE id_pegawai=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>