<?php
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    if (empty($email)) {
        $error .= '<p class = "error text-danger">Mohon masukkan alamat email.</p>';
    }
    if (empty($password)) {
        $error .= '<p class = "error text-danger">Mohon masukkan password.</p>';
    }
    if (empty($error)) {
        if ($query = $conn->prepare("SELECT * FROM users WHERE email = ?")) {
            $query->bind_param('s', $email);
            $query->execute();
            $result = $query->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    $_SESSION["userid"] = $row['id'];
                    $_SESSION["user"] = $row;
                    header("location: dashboard.php");
                    exit;
                } else {
                    $error .= '<p class="text-danger error">Password salah.</p>';
                }
            } else {
                $error .= '<p class="text-danger error">Email tidak terdaftar.</p>';
            }
            $query->close();
        } else {
            $error .= '<p class="text-danger error">Terjadi kesalahan pada query.</p>';
        }
    }
    mysqli_close($conn);
}
?>