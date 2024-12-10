<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'include/header.php';
    include 'include/config.php';
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body class="container">
    <div>
        <h1 class="display-2">Input Data Berita</h1>
        <h6 class="display-6">Masukkan data-data penting berita.</h6>
    </div>

    <!-- Form -->
    <form class="card mt-2" style="padding: 2%;" action="berita2.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="bid" class="col-sm-2 col-form-label fw-bold">ID Berita</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Masukkan ID berita" type="text" name="bid" id="bid">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bju" class="col-sm-2 col-form-label fw-bold">Judul Berita</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Masukkan judul berita" type="text" name="bju" id="bju">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bis" class="col-sm-2 col-form-label fw-bold">Isi Berita</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Masukkan isi berita" type="text" name="bis" id="bis">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bsu" class="col-sm-2 col-form-label fw-bold">Sumber Berita</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Masukkan sumber berita" type="text" name="bsu" id="bsu">
            </div>
        </div>

        <!-- Select Dropdown -->
        <div class="row mb-3">
            <label for="kko" class="col-sm-2 col-form-label fw-bold">Kode Kategori</label>
            <div class="col-sm-10">
                <select class="form-select" name="kko" id="kko" data-bs-theme="dark">
                    <option value="">Pilih kode kategori</option>
                    <?php
                    $select = "SELECT k.kategori_KODE, k.kategori_NAMA 
                       FROM kategori k 
                       LEFT JOIN berita2 b ON k.kategori_KODE = b.kategori_KODE 
                       ORDER BY k.kategori_KODE ASC";
                    $result = mysqli_query($conn, $select);

                    while ($row = mysqli_fetch_array($result)) { ?>
                        <option value="<?php echo $row['kategori_KODE']; ?>">
                            <?php echo $row['kategori_KODE'] . " " . $row['kategori_NAMA']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#kko').select2({
                    placeholder: "Pilih kode kategori",
                    allowClear: true
                });
            });
        </script>


        <!-- Select Dropdown -->

        <!-- Upload Foto -->
        <div class="row mb-3">
            <label for="bfo" class="col-sm-2 col-form-label fw-bold">Foto Berita</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Masukkan foto berita" type="file" name="bfo" id="bfo" accept=".jpg, .jpeg, .png">
            </div>
        </div>
        <!-- Upload Foto -->
        <!-- Form -->

        <!-- Tombol Form -->
        <div class="row mb-3">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input class="btn btn-success fw-bold" type="submit" value="Simpan" name="simpan_berita2">
                <input class="btn btn-danger fw-bold" type="reset" value="Reset">
            </div>
        </div>
        <!-- Tombol Form -->
    </form>

    <!-- Table -->
    <div class="mb-3"></div>
    <h1 class="display-4">Output Data Berita</h1>
    <table class="table table-striped table-bordered table-hover text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th>Judul Berita</th>
                <th class="text-start">Isi Berita</th>
                <th>Sumber Berita</th>
                <th>Kode Kategori</th>
                <th>Foto Berita</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM berita2 ORDER BY berita_ID ASC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {


            ?>
                    <tr>
                        <td><?php echo $row['berita_ID'] ?></td>
                        <td><?php echo $row['berita_JUDUL'] ?></td>
                        <td class="text-start"><?php echo $row['berita_ISI'] ?></td>
                        <td><?php echo $row['berita_SUMBER'] ?></td>
                        <td><?php echo $row['kategori_KODE'] ?></td>
                        <td><?php $imgPath = 'images/' . $row['berita_FOTO'];
                            if (file_exists($imgPath)) {
                                echo '<img src="' . $imgPath . '" alt="Berita Foto" style="width: 100px; height: auto;">';
                            }?></td>
                    </tr>
            <?php }
            } else {
                echo "Tidak Ada Data";
            } ?>
        </tbody>
    </table>
    <!-- Table -->
</body>

</html>