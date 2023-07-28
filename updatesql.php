<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form input-barang 

$id_nilai = $_POST['id_nilai'];
$skor=$_POST["skor"];
$matkul=$_POST["matkul"];




$sql="update nilai set skor = '$skor', matkul = '$matkul' where id_nilai = '$id_nilai'";


$hasil=mysqli_query($koneksi,$sql);


  if ($hasil) {
	echo "Berhasil update data";
  header('Location:menu2.php');
	exit;
  }
else {
	echo "Gagal update data";
	exit;
}  

?>