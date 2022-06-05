<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'skl');
    if(!$koneksi){
        echo "Koneksi Gagal";
    }
?>