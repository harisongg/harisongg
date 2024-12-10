<?php
$id = $_GET['id'];
$sql = "DELETE FROM mobil WHERE id=$id";

$message = "";
if ($conn->query($sql) === TRUE) {
    $message = "Data berhasil dihapus";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
}
?>