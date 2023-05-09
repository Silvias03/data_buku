<?php

    require "koneksi.php";

?>

<html>
    <head>
        <title>tambah data buku</title>
    </head>

    <body>
        <h1>Tambah data buku</h1>

        <form method="post" action="addAction.php">
            <table>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul_buku"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="penerbit"></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><input type="text" name="pengarang"></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><input type="number" name="tahun"></td>
                </tr>
                <tr>
                    <td>Jenis Buku</td>
                    <td><input type="text" name="jenis_buku"></td>
                </tr>
                <tr>
                    <td>Lokasi Rak</td>
                    <td><input type="text" name="lokasi_rak"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>