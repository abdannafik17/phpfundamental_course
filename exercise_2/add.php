<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option selected="selected">-Pilih Jenis Kelamin-</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><textarea name="alamat" style="font-family:Times New Roman"></textarea></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        // include database connection file
        include_once("../day3/koneksi.php");

        // Insert user data into table
        $result = mysqli_query($connect, "INSERT INTO pegawai(nama,jenis_kelamin,no_hp,alamat) VALUES('$nama','$jenis_kelamin','$no_hp','alamat')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>