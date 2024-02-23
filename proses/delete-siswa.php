<?php
include "../database/koneksi.php";
$no = $_GET['id'];
$update ="DELETE FROM datapes where idpeserta='$no'";
$update_query = mysqli_query($koneksi, $update);

if ($update_query){
	echo "<script>
	alert('DATA BERHASIL DI HAPUS!');
            window.location.href = '../daftar-siswa.php';
	</script>";
	?>
<?php
}else{
	echo "Data Gagal diTambah";
}
?>