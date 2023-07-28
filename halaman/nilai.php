<?php

include 'config.php';

$result = mysqli_query($koneksi, "SELECT * FROM nilai ");

/*while($mhs=mysqli_fetch_assoc($result)){
    var_dump($mhs);
    die();
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
   
</head>
<body>
    <div class="container">

    
    <table>
        <tr>
            <th>No.</th>
            <th>Skor</th>
            <th>Mata Kuliah</th>
            
            
        </tr>
        
        <?php $i=1 ?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
          
         <tr>
            <td><?=  $i; ?></td>
            <td><?= $row["skor"]; ?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $row["matkul"]; ?></td>
            
            
            
         </tr>
         <?php $i++ ?>
         <?php endwhile?>   

    </table>
   
    </div>
    <style>
        .container {
          
          float: center;
          padding: 50px;
          background-color: white;
          height: 350px;
          width: 450px;
          margin-top: 0px;
          margin-left: 350px;
          border: solid black;
          border-collapse: collapse;
          border-radius: 5px;
          
        }
        body{
            background-image: url("gambar1.png");
            background-size: cover;
        }
        .container th{
            background-color: #7FFFD4;
            
        }
        th{
            padding: 8px 10px;
            display: table-cell;

            
        }
        td{
            padding: 16px 37px;
        }
      
    



    </style>
</body>
</html>