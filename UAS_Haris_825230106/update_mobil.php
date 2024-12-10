<?php
require_once "include/config.php";
require_once "include/session.php";

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

<!DOCTYPE html>
<html>
<head>
    <title>Update Item</title>
</head>
<body>
    <h1>Update Item</h1>
    <form method="post">
        Merk: <input type="text" name="merk" value="<?php echo $item['merk']; ?>"><br>
        Model: <input type="text" name="model" value="<?php echo $item['model']; ?>"><br>
        Tahun: <input type="number" name="tahun" value="<?php echo $item['tahun']; ?>"><br>
        Harga: <input type="number" step="0.01" name="harga" value="<?php echo $item['harga']; ?>"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
