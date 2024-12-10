<?php
require_once "include/config.php";
require_once "include/session.php";

$id = $_GET['id'];
$sql = "DELETE FROM mobil WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
