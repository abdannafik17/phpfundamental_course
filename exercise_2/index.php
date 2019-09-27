<?php
// Create database connection using config file
include_once("../day3/koneksi.php");

// Fetch all users data from database
$result = mysqli_query($connect, "SELECT * FROM pegawai ORDER BY id_pegawai DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Pegawai</a><br/><br/>

    <table width='80%' border=1>
        <tr>
            <th>Nama</th> <th>Jenis Kelamin</th> <th>No HP</th> <th>Alamat</th> <th>Action</th>
        </tr>
        <?php  
            while($peg = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$peg['nama']."</td>";
                echo "<td>".$peg['jenis_kelamin']."</td>";
                echo "<td>".$peg['no_hp']."</td>";  
                echo "<td>".$peg['alamat']."</td>";    
                echo "<td><a href='edit.php?id=$peg[id_pegawai]'>Edit</a> | <a href='delete.php?id=$peg[id_pegawai]'>Delete</a></td></tr>";        
            }
        ?>
    </table>
</body>
</html>