<?php
$servername = "localhost";
$username = "root";
$pasword = "oke";

$koneksi = mysql_connect($servername, $username, $pasword);

if (!$koneksi) {
    die("koneksi gagal: " . mysql_connect_error());
}
echo "koneksi sukses";
?>