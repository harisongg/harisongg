<?php
include 'include/config.php';

if (isset($_POST['simpan_berita2'])) {
    $bid = mysqli_real_escape_string($conn, $_POST['bid']);
    $bju = mysqli_real_escape_string($conn, $_POST['bju']);
    $bis = mysqli_real_escape_string($conn, $_POST['bis']);
    $bsu = mysqli_real_escape_string($conn, $_POST['bsu']);
    $kko = mysqli_real_escape_string($conn, $_POST['kko']);

    $bfo = $_FILES['bfo']['name'];
    $tmp_bfo = $_FILES['bfo']['tmp_name'];

    $path = "images/$bfo";

    if (!move_uploaded_file($tmp_bfo, $path)) {
        exit("<script>alert('Gagal upload foto, silahkan coba lagi.');window.location='index.php'</script>");
    }

    $query = "INSERT INTO berita2 (berita_ID, berita_JUDUL, berita_ISI, berita_SUMBER, kategori_KODE, berita_FOTO) VALUES ('$bid', '$bju', '$bis', '$bsu', '$kko', '$bfo')";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>window.location= 'index.php'</script>";
    } else {
        echo "<script>alert('Gagal Simpan'); window.location= 'index.php'</script>";
    }
}