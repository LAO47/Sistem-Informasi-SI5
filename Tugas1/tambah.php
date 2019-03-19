<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
<?php
// include file koneksi database
include_once("konek.php");

if(isset($_POST['submit'])) {   
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
        
        // kembali ke page sebelumnya
        echo "<br/><a href='javascript:self.history.back();'>&larr; Kembali</a>";
    } 
    else {    
        // jika field tidak kosong maka insert database   
        $result = mysqli_query($koneksi, "INSERT INTO tbl_si(id,nama,nim,lab) VALUES('$id','$namaa','$nim','$lab')");
        
        // tampilan sukses
        echo "<br>";
        echo "<center><h1>Data berhasil ditambah!</h1><center>";
        echo "<center><button><a href='adminPage.php'>Lihat hasil</a></button><center>";
    }
}
?>
</body>
</html>