<?php
// include database connection file
include_once("../day3/koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_hp=$_POST['no_hp'];
    $alamat=$_POST['alamat'];

    // update user data
    $result = mysqli_query($connect, "UPDATE pegawai SET nama='$nama',jenis_kelamin='$jenis_kelamin',no_hp='$no_hp',alamat='$alamat' WHERE id_pegawai=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM pegawai WHERE id_pegawai=$id");

while($peg = mysqli_fetch_array($result))
{
    $nama = $peg['nama'];
    $jenis_kelamin = $peg['jenis_kelamin'];
    $no_hp = $peg['no_hp'];
    $alamat = $peg['alamat'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_pegawai" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?=$nama;?> size="35"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td> 
                    <select name="jenis_kelamin" required>
                        <option>-Pilih Jenis Kelamin-</option>
                        <option value="L" <?php if($jenis_kelamin=='L') echo 'selected="selected"'; ?> >Laki - Laki</option>
                        <option value="P" <?php if($jenis_kelamin=='P') echo 'selected="selected"'; ?> >Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>