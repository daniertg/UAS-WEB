<?php
include 'config.php';
$id_nilai        = $_GET['id_nilai'];
$sql="select * from nilai where id_nilai='$id_nilai'";
$hasil=mysqli_query($koneksi,$sql);
$row        = mysqli_fetch_array($hasil);


?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form method="post" action="updatesql.php">
        <div class="container">
        <div class ="box">
        <h1>Update Barang</h1>
      <hr>
      <label for="id_nilai"><b>ID Nilai</b></label>
      <input type="text" value="<?php echo $row['id_nilai'];?>" name="id_nilai">
      <label for="skor"><b>Skor</b></label>
      <input type="number" placeholder="Masukan Skor Baru" name="skor" value="<?php echo $row['skor'];?>" required>
      <label for="matkul"><b>Matkul</b></label>
      <input type="text" value="<?php echo $row['matkul'];?>" placeholder="Masukan Nama matkul Baru" name="matkul" required>
      
      <hr>
      <hr>
      <button type="submit" class="registerbtn">Input</button>
        </form>
        </div>
        </div>
    </body>
</html>
<style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          background-image: url("gambar1.png");
          background-size: cover;
         ;
        }
        * {
          box-sizing: border-box;
        }
        /* Add padding to containers */
        .container {
          
          float: center;
          padding: 40px;
          background-color: white;
          height: 625px;
          width: 35%;
          margin-top: 90px;
          margin-left: 489px;
          
        }
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
  background-color: #0d0e0e;
  color: white;
  padding: 10px 2px;
  margin: 2px ;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 1;
}
.registerbtn:hover {
  opacity: 1;
}
/* Add a blue text color to links */
</style>
</body>
</html>