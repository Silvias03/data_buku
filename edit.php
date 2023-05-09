<?php

    require "koneksi.php";

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_buku where id_buku = '$id'");
    $ambil = mysqli_fetch_assoc($query);
?>

<html>
    <head>
        <title>Edit data buku</title>
    </head>

    <body>
        <h1>Edit data buku</h1>

        <form method="post" action="editAction.php">
        <input type="hidden" name="id" value="<?= $ambil['id_buku']; ?>">
            <table>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul_buku" value="<?= $ambil['judul_buku']; ?>"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="penerbit" value="<?= $ambil['penerbit']; ?>"></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><input type="text" name="pengarang" value="<?= $ambil['pengarang']; ?>"></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><input type="number" name="tahun" value="<?= $ambil['tahun']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Buku</td>
                    <td><input type="text" name="jenis_buku" value="<?= $ambil['jenis_buku']; ?>"></td>
                </tr>
                <tr>
                    <td>Lokasi Rak</td>
                    <td><input type="text" name="lokasi_rak" value="<?= $ambil['lokasi_rak']; ?>"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>