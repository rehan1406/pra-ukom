<?php

include "../database/koneksi.php";
$nama = $_POST['namasekolah'];
$lomba = $_POST['lomba'];
$nilai = $_POST['nilai'];

$insert ="INSERT INTO nilai()VALUES('$nama','$lomba','$nilai')";
$insert_query = mysqli_query($koneksi, $insert);

if ($insert_query){
	header("Location: ../daftar-nilai.php?status=success");
exit();
?>
     <?php
}else{
	echo "Data Gagal diTambah";
}
?>