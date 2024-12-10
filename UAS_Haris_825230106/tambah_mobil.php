<?php
require_once "include/config.php";
require_once "include/session.php";
require_once "queries/qtambah_mobil.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Tambah Mobil</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        <header>
            <nav class="navbar navbar-expand-md bg-secondary-subtle navbar-body-secondary pt-3">
                <div class="container">
                    <a href="dashboard.php" class="navbar-brand">
                        <h1 class="fst-italic display-6">Haris</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fs-5" id="navbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active fst-italic fw-light fs-2" href="dashboard.php">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container mt-5">
                <h1 class="mb-4">Tambah Mobil</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="merk" class="form-label"><i class="bi bi-car-front"></i> Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk" required>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label"><i class="bi bi-car-front-fill"></i> Model</label>
                        <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label"><i class="bi bi-calendar"></i> Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label"><i class="bi bi-cash"></i> Harga (Rp)</label>
                        <input type="number" class="form-control" id="harga" name="harga" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                </form>
            </div>
        </main>
        <footer class="p-5 bg-secondary-subtle text-white text-center position-relative mt-auto">
            <div class="container">
                <p class="lead">Copyright &copy; Haris - Sistem Informasi</p>
                <a href="#" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
            </div>
        </footer>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
