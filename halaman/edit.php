<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    h1{
      margin-left: 270px;
      margin-bottom: 20px;
      margin-top: -20px;
    }
    .bio{
        margin-left: 400px; 
    }
   
    
    .aa1{
        border: solid 2px black;
        width: 1620px;
        height: 400px;
        margin-top: 10px;
        margin-left: -148px;
        
    }
    .aa2{
        border: solid 2px black;
        width: 1620px;
        height: 400px;
        margin-top: 10px;
        margin-left: -148px;
        font-size: 18px;
        
    }
    .aa2 tr td{
        

    }
    #bb1{
        font-size: 20px;
    }
    .aa1 td img{
        margin-left: 10px;
    }
    .aa2 td p{
        margin-top: -180px;

    }
    a{
        color: #696969;
    }
    .c{
        margin-top: -142px ;
        margin-left: -1607px;

    }
    .c1{
        margin-top: -105px ;
        margin-left: -1609px;
    }
    .c2{
        margin-top: -67px ;
        margin-left: -1612px;
    }

   

</style>
<body>
    <?php
    include 'config.php' ;
    $result = mysqli_query($koneksi, "SELECT * FROM profile");
    
    
    ?>
    <h1>Profile</h1>
    <hr>
    
       <div class="bio">

        <?php $i=1 ?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
         <tr>
            <table class="aa1">
                <td><img src="image/<?php echo $row["gambar"]; ?>"></td>
               
          
         </table> 
    
       <table class="aa2">
       <td><p>Nama &nbsp;:&nbsp;<a><?= $row["nama"]; ?></a></p></td>
       <td><div class="c">Kelas &nbsp;:&nbsp;<a><?= $row["kelas"]; ?></a></div></td>
       <td><div class="c1">Nim &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<a><?= $row["nim"]; ?></a></div></td>
       <td><div class="c2">Tanggal Lahir :&nbsp;<a><?= $row["ttl"]; ?></a></div></td>

       </table>
        
       
            
            
         </tr>
         <?php $i++ ?>
         <?php endwhile?>   
         </div>
    
    


    
</body>
</html>