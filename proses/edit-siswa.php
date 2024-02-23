<?php
include '../database/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $no = $_POST['idpeserta'];  // Sesuaikan dengan kunci yang sesuai dengan formulir HTML Anda
    $nama_siswa = $_POST['namasekolah'];
    $kelas = $_POST['namagugus'];
    $alamat = $_POST['namakoor'];
    $umur = $_POST['kontak'];

    $update_query = "UPDATE datapes SET
                    namasekolah = '$nama_siswa',
                    namagugus = '$kelas',
                    namakoor = '$alamat',
                    kontak = '$umur'
                    WHERE idpeserta = '$no'";  // Sesuaikan dengan nama kolom di tabel Anda

    if (mysqli_query($koneksi, $update_query)) {
        echo "<script>
            alert('DATA BERHASIL DI UBAH!');
            window.location.href = '../daftar-siswa.php'; // Menggunakan JavaScript untuk mengarahkan ke halaman admin
          </script>";
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>
