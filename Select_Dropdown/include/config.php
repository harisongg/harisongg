<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "berita";
$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die('Koneksi database gagal');
}
?>