<?php
    require "koneksi.php";  

    $query          = mysqli_query($koneksi, "SELECT * FROM data_buku ");
?>

<html>
    <head>
        <title>Buku_Perpus</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <h1 > Data Buku </h1>

        <a href="add.php"> tambah data buku </a>
        <P></P>
        <table border="1"> 
            <tr>
                <td>id buku</td>
                <td>judul buku</td>
                <td>penerbit</td>
                <td>pengarang</td>
                <td>tahun</td>
                <td>jenis buku</td>
                <td>lokasi rak</td>
            </tr>
            <?php $no = 1; ?>
            <?php while ($ambilData = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++; ?></td>    
                <td><?= $ambilData['judul_buku']; ?></td>    
                <td><?= $ambilData['penerbit']; ?></td>    
                <td><?= $ambilData['pengarang']; ?></td>    
                <td><?= $ambilData['tahun']; ?></td>    
                <td><?= $ambilData['jenis_buku']; ?></td>   
                <td><?= $ambilData['lokasi_rak']; ?></td>   
                <td>
                        <a href="edit.php?id=<?= $ambilData['id_buku'] ; ?>"> edit </a> | 
                        <a href="delete.php?id=<?= $ambilData['id_buku'] ; ?>"> delete </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        
    </body>
</html>