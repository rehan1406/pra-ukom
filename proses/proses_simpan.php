<?php

include "../database/koneksi.php";
$nama = $_POST['namasekolah'];
$kelas = $_POST['namagugus'];
$alamat = $_POST['namakoor'];
$umur = $_POST['kontak'];

$insert ="INSERT INTO datapes()VALUES('','$nama','$kelas','$alamat','$umur')";
$insert_query = mysqli_query($koneksi, $insert);

if ($insert_query){
	header("Location: ../tambah-siswa.php?status=success");
exit();
?>
     <?php
}else{
	echo "Data Gagal diTambah";
}
?>