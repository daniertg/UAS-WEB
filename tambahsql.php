<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form input-barang 
$id_barang=$_POST["id_barang"];
$nama_barang=$_POST["nama_barang"];
$harga_barang=$_POST["harga_barang"];


//Query input menginput data kedalam tabel barang
  $sql="insert into nilai (id_nilai,skor,matkul) values
		('$id_barang','$nama_barang','$harga_barang')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
    header('Location:menu2.php');
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>