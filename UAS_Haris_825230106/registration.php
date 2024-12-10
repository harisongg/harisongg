<?php
require_once "include/config.php";
require_once "include/session.php";
require_once "queries/qregistration.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Registrasi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <header class="justify-content-center">
            <nav class="navbar navbar-expand-md bg-secondary-subtle navbar-body-secondary pt-3">
                <div class="container justify-content-center">
                    <div class="navbar-brand text-center">
                        <h1 class="fst-italic display-6">Haris_825230106</h1>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container p-4">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Registrasi</h2>
                        <h4>Isi untuk membuat akun.</h4>
                        <form action="" method="post">
                            <?php echo $emailError; ?>
                            <?php echo $passwordError; ?>
                            <?php echo $confirmPasswordError; ?>
                            <?php echo $successMessage; ?>
                            <div class="form-group mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="col-form-label">Alamat Email </label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan alamat email" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="confirm_password" class="col-form-label">Konfirmasi Password</label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi password" required>
                            </div>

                            <div class="form-group mb-3">
                                <input class="btn btn-success fw-bold" type="submit" value="Simpan" name="submit">
                            </div>
                            <p>Sudah memiliki akun? <a href="login.php">Login disini</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="p-5 bg-secondary-subtle text-white text-center position-relative" style="margin-top: auto; position: fixed; width: 100%; bottom: 0; flex-shrink: 0;">
        <div class="container">
            <p class="lead">Copyright &copy; 2024 Haris - Sistem Informasi</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </div>
</body>

</html>