<?php
//mulai session
session_start();

//jika user sudah login, akan di-redirect ke welcome.php
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("location: welcome.php");
    exit;
}
?>