<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "uas";
$conn = mysqli_connect($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die('Koneksi database gagal');
}
?>