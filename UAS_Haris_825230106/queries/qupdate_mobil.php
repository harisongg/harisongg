<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM mobil WHERE id=$id");
$item = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $merk = $_POST['merk'];
    $model = $_POST['model'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];

    $sql = "UPDATE mobil SET merk='$merk', model='$model', tahun='$tahun', harga='$harga' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>