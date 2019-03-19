<?php
// include file koneksi database
include_once("konek.php");

if(isset($_POST['update']))
{   
    $id = mysqli_real_escape_string($koneksi, $_POST['idnya']);
    $namaa = mysqli_real_escape_string($koneksi, $_POST['namanya']);
     $nim = mysqli_real_escape_string($koneksi, $_POST['nimnya']);
     $lab = mysqli_real_escape_string($koneksi, $_POST['labnya']);
    // cek jika field kosong
    if(empty($id) || empty($namaa) || empty($nim) || empty($lab)) {
                

        if(empty($id)) {
            echo "<font color='red'>ID-nya blom keisi.</font><br/>";
        }

       if(empty($namaa)) {
            echo "<font color='red'>Namanya blom keisi.</font><br/>";
        }
        
        if(empty($nim)) {
            echo "<font color='red'>NIMnya blom keisi.</font><br/>";
        }
        
        if(empty($lab)) {
            echo "<font color='red'>Labnya blom keisi.</font><br/>";
        }
    } 

    else {    
        //update/edit table database
        $result = mysqli_query($koneksi, "UPDATE tbl_si SET id='$id', nama='$namaa', nim='$nim', lab='$lab' WHERE id=$id");
        
        //redirect ke halaman awal
        header("Location: adminPage.php");
    }
}
?>

<?php
// mendapatkan id dari URL
$id = $_GET['id'];

// menampilkan isi database berdasarkan id
$result = mysqli_query($koneksi, "SELECT * FROM tbl_si WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
    $nama = $res['nama'];
    $nim = $res['nim'];
    $lab = $res['lab'];
    
    }
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <button><a href="adminPage.php">&larr; Kembali</a></button>
    <br>
    <h1>Edit Data Praktikan Lab Sistem Informasi</h1>
    
    <form name="form1" method="post" action="edit.php">
        <table border="1">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="idnya" value="<?php echo $id;?>"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="namanya" value="<?php echo $nama;?>"></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nimnya" value="<?php echo $nim;?>"></td>
            </tr>
            <tr> 
                <td>Lab</td>
                <td><input type="text" name="labnya" value="<?php echo $lab;?>"></td>
            </tr>
            <tr> 
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>