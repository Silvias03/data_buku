<?php

require "koneksi.php";

//ambil nama dari file tambah data
$id             = $_POST['id'];
$judul_buku     = $_POST['judul_buku'];
$penerbit       = $_POST['penerbit'];
$pengarang      = $_POST['pengarang'];
$tahun          = $_POST['tahun'];
$jenis_buku     = $_POST['jenis_buku'];
$lokasi_rak     = $_POST['lokasi_rak'];

//input data buku
$input = mysqli_query($koneksi, "UPDATE data_buku SET judul_buku = '$judul_buku',
                                                      penerbit = '$penerbit',
                                                      pengarang = '$pengarang',
                                                      tahun = '$tahun',
                                                      jenis_buku = '$jenis_buku',
                                                      lokasi_rak = '$lokasi_rak' where id_buku = '$id' ");

header("location:index.php");
?>