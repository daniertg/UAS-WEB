<?php 
include 'config.php';
$id_nilai = $_GET['id_nilai'];


$sql="delete from nilai where id_nilai = '$id_nilai'";
$hasil=mysqli_query($koneksi,$sql);
if ($hasil) {
	echo "Berhasil hapus data";
    header('Location:nilai2.php');
	exit;
  }
else {
	echo "Gagal hapus data";
	exit;
}
?>