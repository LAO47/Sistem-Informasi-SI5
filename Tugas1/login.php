@@ -1,2 +1,26 @@
<?php
<?php 
// mengaktifkan session php

session_start();
 
// menghubungkan dengan koneksi
include 'konek.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['passwud'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE uname='$username' AND passw='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:/sistem%20Informasi/Tugas1/adminPage.php");
}else{
	header("location:/sistem%20Informasi/Tugas1/loginAdmin.php?pesan=salahKamuTu");
}
?>
