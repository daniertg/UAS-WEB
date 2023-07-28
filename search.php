<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$host="localhost";
$user="root";
$password="";
$database="uas";

$koneksi = mysqli_connect($host,$user,$password,$database);




?>
<form method="GET" action="search.php" style="text-align: center;" class="search">
		<label><h3>Kata Pencarian :</h3></label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>
<table>
		<thead>
			<tr>
				<th>ID Nilai</th>
				<th>Skor</th>
				<th>Matkul</th>
			</tr>
		</thead>
		<tbody>
			<?php 


				//jika kita klik cari, maka yang tampil query cari ini
				if(isset($_GET['kata_cari'])) {
					//menampung variabel kata_cari dari form pencarian
					$kata_cari = $_GET['kata_cari'];

					//jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
					//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
					$query = "SELECT * FROM nilai WHERE id_nilai like '%".$kata_cari."%' OR skor like '%".$kata_cari."%' OR matkul like '%".$kata_cari."%' ORDER BY id_nilai ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM nilai ORDER BY id_nilai ASC";
				}
				

				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['id_nilai']; ?></td>
				<td><?php echo $row['skor']; ?></td>
				<td><?php echo $row['matkul']; ?></td>
			</tr>
			<?php
			}
			?>

		</tbody>
	</table> 
    <style>
        input{
            width: 250px;
            height: 25px;
            background-color: #DCDCDC;
        }
        button{
                width: 45px;
                height: 28px;
        }
        .search{
            margin-right: 700px;
        }
        h3{
            margin-right: 160px;
        }
    </style>  
</body>
</html>