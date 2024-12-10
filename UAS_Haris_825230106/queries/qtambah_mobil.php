<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $merk = $_POST['merk'];
    $model = $_POST['model'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO mobil (merk, model, tahun, harga) VALUES ('$merk', '$model', '$tahun', '$harga')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>