<?php

    $koneksi = mysqli_connect("localhost", "root", "", "buku_perpus");

    if(!$koneksi) {
        echo "gagal terhubung ke database". mysqli_connect_error();
    }

    ?>