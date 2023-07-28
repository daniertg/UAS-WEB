<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Tambah Nilai
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Masukan Nilai</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
      <form action="tambahsql.php" method="post">
      <input type="number" placeholder="Masukan ID Nilai" name="id_barang" class="form-control" required>
      
      <input type="number" placeholder="Masukan Skor" name="nama_barang" class="form-control" required>
      <input type="text" placeholder="Masukan Matkul" name="harga_barang" class="form-control" required>
      <br>
      <button type="submit" class="btn btn-primary">Input</button>
  </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<table class="table">
  <thead></thead>
<tr><th>ID</th><th>Skor</th><th>Matkul</th><th>Aksi</th></tr>  
    <?php
    include 'config.php';
     $halaman = 5; /* page halaman*/
     $page   =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
     $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
     $nilai = mysqli_query($koneksi, "SELECT * from nilai");
     $tampilMas    =mysqli_query($koneksi,"SELECT * FROM nilai LIMIT $mulai, $halaman");
    $total = mysqli_num_rows($nilai);
    $pages = ceil($total/$halaman);
    $no = $mulai+1;
    while ($row =mysqli_fetch_array($tampilMas)) {  
    echo "<tr>
    <td>" . $row['id_nilai'] . "</td>
    <td>" . $row['skor'] . "</td>
    <td>" . $row['matkul'] . "</td>
    <td><a href='update.php?id_nilai=$row[id_nilai]'><button type='button' class='edit'>Edit</button></a> "; ?>
	 <a href='delete.php?id_nilai=<?=$row['id_nilai'];?>' onclick="return confirm('Yakin akan menghapus Data?')"><button type='button' class='hapus'>Delete</button></a></td>
			              </tr>

                    <?php  
                }
            ?>
    </table>
    <br />
    <div style="font-weight:bold;" class="pag" >
        Paging
        <?php
            for ($i=1; $i<=$pages ; $i++){
        ?>
            <a href="nilai2.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
        <?php
            }
        ?>
    </div>
    <style>
      .pag{
        position: fixed;
        margin-top: 20px;
        margin-bottom: -480px;
        margin-left: 400px;
      }
      .table{
        width: 650px;
        margin-left: 350px;
      }
      .edit , .hapus , .tambah {
        background-color: #0d0e0e;
        border-radius: 5px;
        color: white;
        padding: 6px;
    }
        .tambah:hover{
        background-color: #2F4F4F;
    }
    .hapus:hover{
        background-color: #2F4F4F;
    }
    .edit:hover{
        background-color: #2F4F4F;
    }
    
.container {
          
          float: center;
          padding: 50px;
          background-color: white;
          height: 550px;
          width: 550px;
          
          margin-left: 350px;
          border: solid black;
          
        }
        body{
            background-image: url("gambar1.png");
            background-size: cover;
        }
        .table{
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
             display: block;
             width: 450px;
             font-size: 18px;
             margin-top: -450px;
             margin-left: 400px;
             
             
        }
        .form{
          width: 400px;
        }
       
      
    </style>
            
        
    

    


</body>
</html>
