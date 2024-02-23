<?php
session_start();
if ( !isset($_SESSION['login'])){
	header("location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Peserta Lomba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'template/dashboard-admin.php'; ?>

        <div class="col-md-9">
            <h3 class="text-center mb-4 mt-3">Form Tambah Data Siswa Sekolah</h3>


            <?php
            // Tampilkan notifikasi jika status=success
            if (isset($_GET['status']) && $_GET['status'] == 'success') {
                echo '<div class="alert alert-success" role="alert">
                        Data berhasil ditambahkan!
                      </div>';
            }
            ?>
            <form action="proses/proses_simpan.php" method="POST">
                <div class="mb-3 ml-3">
                    <label for="nama" class="form-label">Nama Sekolah</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Sekolah..." name="namasekolah">
                </div>


                <div class="mb-3 ml-3">
                    <label for="nama" class="form-label">Nama Gugus</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Gugus..." name="namagugus">
                </div>

                <div class="mb-3 ml-3">
                    <label for="nama" class="form-label">Nama Koordinator</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Koordinator..." name="namakoor">
                </div>

                <div class="mb-3 ml-3">
                    <label for="nama" class="form-label">Kontak</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Kontak..." name="kontak">
                </div>
                <!-- Tambahkan input sesuai kebutuhan -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
