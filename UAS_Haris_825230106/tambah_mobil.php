<?php
require_once "include/config.php";
require_once "include/session.php";

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

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Item</title>
</head>
<body>
    <h1>Tambah Item</h1>
    <form method="post">
        Merk: <input type="text" name="merk"><br>
        Model: <input type="text" name="model"><br>
        Tahun: <input type="number" name="tahun"><br>
        Harga: <input type="number" step="0.01" name="harga"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
