<?php
session_start();
include '../database/koneksi.php';

$USER = $_POST['username'];
$PASS = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$USER' AND password='$PASS'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['login'] = true;
    echo "<script>
            alert('Selamat Datang');
            window.location.href = '../admin.php'; // Menggunakan JavaScript untuk mengarahkan ke halaman admin
          </script>";
} else {
    echo "<script>
            alert('Login Gagal, Silahkan Login Ulang');
            window.location.href = '../login.php'; // Menggunakan JavaScript untuk mengarahkan ke halaman login kembali
          </script>";
}
?>
