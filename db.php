<?php
//CONNECTING TO DATAABASE
$koneksi = mysqli_connect("localhost", "root", "", "sekolah");

//cek kondisi
if (mysqli_connect_errno()) {
    echo "Koneksi gagal : " .
    mysqli_connect_error();
}
?>