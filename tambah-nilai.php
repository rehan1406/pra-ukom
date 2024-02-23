<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Siswa Sekolah</title>
</head>
<body>
    <?php include 'database/koneksi.php';?>
    <?php include 'template/dashboard-admin.php';?>

    <div class="col-md-9">
        <h3 class="text-center mb-4 mt-3">Form Tambah Data Siswa Sekolah</h3>
        <form action="proses/proses-tambah-nilai.php" method="POST">
            <div class="mb-3 ml-3">
                <label for="namasekolah" class="form-label">Nama Sekolah</label>
                <select class="form-control" id="namasekolah" name="namasekolah">
                    <?php
                        // Query untuk mendapatkan nama sekolah dari database
                        $query_nama_sekolah = "SELECT namasekolah FROM datapes";
                        $result_nama_sekolah = mysqli_query($koneksi, $query_nama_sekolah);

                        // Tampilkan nama sekolah sebagai pilihan pada dropdown
                        while ($row_nama_sekolah = mysqli_fetch_assoc($result_nama_sekolah)) {
                            echo '<option value="' . $row_nama_sekolah['namasekolah'] . '">' . $row_nama_sekolah['namasekolah'] . '</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3 ml-3">
                <label for="lomba" class="form-label">Jenis Mata Lomba</label>
                <select class="form-control" id="lomba" name="lomba">
                    <option value="LKBBT">LKBBT</option>
                    <option value="Pioneering">Pioneering</option>
                    <option value="Semaphore Slide">Semaphore Slide</option>
                    <option value="Semaphore Dance">Semaphore Dance</option>
                    <option value="Puzzle Flag">Puzzle Flag</option>
                    <option value="Hasta Karya">Hasta Karya</option>
                    <option value="Guest The Hero">Guest The Hero</option>
                </select>
            </div>

            <div class="mb-3 ml-3">
                <label for="namakoor" class="form-label">Nilai</label>
                <input type="text" class="form-control" id="nilai" placeholder="Masukkan Nilai" name="nilai" oninput="validateInput(this)" pattern="[0-9]{1,3}" title="Hanya angka 1-100">
            </div>

            <!-- Tambahkan tombol submit -->
            <div class="mb-3 ml-3">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>

    <script>
        // Generate ID Peserta secara otomatis saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            generateIDPeserta();
        });

        // Fungsi untuk generate ID Peserta
        function generateIDPeserta() {
            // Ambil elemen input ID Peserta
            var idPesertaInput = document.getElementById("idpeserta");

            // AJAX request untuk mendapatkan ID Peserta terbaru dari database
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update value pada input ID Peserta
                    idPesertaInput.value = xhr.responseText;
                }
            };
            xhr.open("GET", "proses/generate_id_peserta.php", true);
            xhr.send();
        }

        // Fungsi untuk validasi input nilai
        function validateInput(input) {
            var value = input.value;
            if (value < 1 || value > 100) {
                alert("Nilai harus berada dalam rentang 1-100");
                input.value = "";
            }
        }
    </script>
</body>
</html>
