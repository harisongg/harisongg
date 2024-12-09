<?php
require_once "include/config.php";
require_once "include/session.php";
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
                    header("location: welcome.php");
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

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Login</h2>
                    <p>Isi alamat email dan password anda.</p>
                    <form action="" method="post">

                        <div class="form-group mb-3">
                            <label for="email" class="col-form-label">Alamat Email </label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan alamat email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="btn btn-success fw-bold" type="submit" value="Simpan" name="submit">
                        </div>
                        <p>Belum memiliki akun? <a href="registration.php">Registrasi disini</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>