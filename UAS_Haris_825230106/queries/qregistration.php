<?php
$emailError = $passwordError = $confirmPasswordError = $successMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $nama = ($_POST['name']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $confirm_password = ($_POST['confirm_password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if ($query = $conn->prepare("SELECT * FROM users WHERE email = ?")) {

        $query->bind_param('s', $email);
        $query->execute();

        $query->store_result();
        if ($query->num_rows > 0) {
            $emailError = '<p class="error text-danger">Alamat email sudah terdaftar!</p>';
        } else {
            if (empty($confirm_password)) {
                $confirmPasswordError = '<p class="error text-danger">Konfirmasi password.</p>';
            } else {
                if ($password != $confirm_password) {
                    $passwordError = '<p class="error text-danger">Password berbeda.</p>';
                }
            }

            if (empty($emailError) && empty($confirmPasswordError) && empty($passwordError)) {
                $insertQuery = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
                $insertQuery->bind_param('sss', $nama, $email, $password_hash);
                $result = $insertQuery->execute();
                if ($result) {
                    $successMessage = '<p class="success text-success">Registrasi berhasil!</p>';
                } else {
                    $emailError = '<p class="error text-danger">Terjadi kesalahan</p>';
                }
            }
        }
    }
    $query->close();
    if (isset($insertQuery)) {
        $insertQuery->close();
    }

    mysqli_close($conn);
}
?>