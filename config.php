<?php
$hostname = "srv172.niagahoster.com";
$database = "nsbp8345_nsbpca";
$username = "nsbp8345";
$password = "Nusamba170290!!";
$connect = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
} 