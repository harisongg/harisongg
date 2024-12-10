<?php
require_once "include/config.php";
require_once "include/session.php";

$result = $conn->query("SELECT id, merk, model, tahun, harga FROM mobil");
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
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
            <section class="bg-secondary-subtle text-light p-4 text-center">
                <div class="container">
                    <div class="md-flex">
                        <h1>
                            <span class="text-light" id="indonesian"> Halo!</span>
                        </h1>

                        <div class="row text-start container">
                            <p class="fs-4 lead col-md" id="penglish">
                                Halo semua! Perkenalkan, nama saya Haris. Kebetulan saya ada sebuah ujian yang mengharuskan
                                saya untuk membuat website yang bertemakan dealer mobil, yang
                                mana sedang bapak/ibu buka saat ini, selamat menikmati website
                                saya! (Sangat terbuka terhadap kritik dan saran)
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-4">
                <div class="container">
                    <h1>Dashboard</h1>
                    <table border="1">
                        <tr>
                            <th>Merk</th>
                            <th>Model</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                        <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['merk']; ?></td>
                            <td><?php echo $row['model']; ?></td>
                            <td><?php echo $row['tahun']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td>
                                <select onchange="location = this.value;">
                                    <option value="">Pilih Aksi</option>
                                    <option value="update_mobil.php?id=<?php echo $row['id']; ?>">Update</option>
                                    <option value="hapus_mobil.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</option>
                                </select>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </table>
                    <br>
                    <a href="tambah_mobil.php">Tambah Data</a>
                </div>
            </section>
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
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

</body>

</html>
