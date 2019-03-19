<?php
// include file koneksi database
include_once("konek.php");

// mendapatkan id dari baris yang akan dihapus
$id = $_GET['id'];

// hapus baris dari table database
$result = mysqli_query($koneksi, "DELETE FROM tbl_si WHERE id=$id");

//redirect ke halaman awal
header("Location:adminPage.php");
?>
