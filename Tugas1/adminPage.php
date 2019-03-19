<?php
include_once("konek.php");
$result = mysqli_query($koneksi, "SELECT * FROM tbl_si ORDER BY id DESC");
?>

<!DOCTYPE html>
<head>
<title>Admin Lab SI</title>
<!-- nanti import cssnya -->
</head>
<body>
    <h2 align="center">Admin Page</h2>
    <table width = "30%" border="1" align="center">
        <thead>
        <!-- ini table head -->
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Lab</th>
            <th>Opsi</th>
        </thead>
        <tbody align="center">
            <?php
                // $yance = 1;
                while($res = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$res['id']. ". </td>";
                    echo "<td>".$res['nama']."</td>";
                    echo "<td>".$res['nim']."</td>";
                    echo "<td>".$res['lab']."</td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"hapus.php?id=$res[id]\" onClick=\"return confirm('Yakin kamu mau dihapus?')\">Hapus</a></td>";
                    echo "</tr>"; 
                    // $yance++;  
                }
            ?>
        </tbody>

    </table>
    <br>
    <center><button><a href="tambahin.html">Tambah Data</a></button></center>
    <br>
   <center> <button><a href="/sistem%20Informasi/Tugas1/index.php">Log out</a> </button> </center>
    <!-- nanti dikasih session_terminate -->
    
</body>

</html>