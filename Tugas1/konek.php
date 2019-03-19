<?php


$Hostnya = 'localhost'; //localhost
$namaDatabase = 'si_lab_tgs1';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi = mysqli_connect($Hostnya, $databaseUsername, $databasePassword, $namaDatabase); 

if ($koneksi->ping()) {
    //printf ("Our connection is ok!\n");
} else {
    //printf ("Error: %s\n", $mysqli->error);
}
?>