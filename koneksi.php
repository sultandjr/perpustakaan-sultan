<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan_sultan";

$konek = mysqli_connect($server,$username,$password,$database);

if (!$konek) {
    die("KONEKSI GAGAL <br>".mysqli_connect_error()."<br>".mysqli_connect_errno());
}
?>