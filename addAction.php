<?php

require "koneksi.php";

//ambil nama dari file tambah data
$judul_buku     = $_POST['judul_buku'];
$penerbit       = $_POST['penerbit'];
$pengarang      = $_POST['pengarang'];
$tahun          = $_POST['tahun'];
$jenis_buku     = $_POST['jenis_buku'];
$lokasi_rak     = $_POST['lokasi_rak'];

//input data buku
$input = mysqli_query($koneksi, "INSERT INTO data_buku VALUES ('', '$judul_buku', '$penerbit', '$pengarang', '$tahun', '$jenis_buku', '$lokasi_rak') ");

header("location:index.php");
?>