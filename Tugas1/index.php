<?php
include_once("konek.php");
$result = mysqli_query($koneksi, "SELECT * FROM tbl_si ORDER BY id DESC");
?>

<!DOCTYPE html>
<head>
<title>Lab Sistem Informasi</title>
<!-- nanti import cssnya -->
</head>
<body>
    <h2 align="center">Main Page</h2>
    <table width = "30%" border="1" align="center">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Lab</th>
        </thead>
        <tbody align="center">
            <!-- Ini baru import datanya dari database -->
            <?php
                // $yance = 1;
                while($res = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$res['id']. ". </td>";
                    echo "<td>".$res['nama']."</td>";
                    echo "<td>".$res['nim']."</td>";
                    echo "<td>".$res['lab']."</td>";
                    echo "</tr>"; 
                    // $yance++;  
                }
            ?>
        </tbody>

    </table>
    
    <p align="center">Kamu admin sini apa admin lambe turah?</p>
   <center> <a href="/sistem%20Informasi/Tugas1/loginAdmin.php">Admin sini</a>  </center>

</body>


</html>