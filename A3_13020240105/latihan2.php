<?php
$servername = "localhost";
$username = "root";
$pasword = "oke";

$koneksi = new mysqli($servername, $username, $pasword);

if (!$koneksi->connect_error){
    die("koneksi gagal: " . $koneksi->connect_error());
}
echo "koneksi sukses";
?>