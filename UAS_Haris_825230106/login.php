<?php
require_once "include/config.php";
require_once "include/session.php";
require_once "queries/qlogin.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Login</title>
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
        <header>
            <nav
                class="navbar navbar-expand-md bg-secondary-subtle navbar-body-secondary pt-3">
                <div class="container">
                    <a href="#" class="navbar-brand">
                        <h1 class="fst-italic display-6">Haris</h1>
                    </a>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse fs-5" id="navbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active fst-italic fw-light fs-2" href='javascript:self.history.back();'>🔙</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container p-4">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Login</h2>
                        <p>Isi alamat email dan password anda.</p>
                        <form action="" method="post">
                            <?php echo $error; ?>
                            <div class="form-group mb-3">
                                <label for="email" class="col-form-label">Alamat Email </label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan alamat email" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>

                            <div class="form-group mb-3">
                                <input class="btn btn-primary fw-bold" type="submit" value="Login" name="submit">
                            </div>
                            <p>Belum memiliki akun? <a href="registration.php">Registrasi disini</a>.</p>
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