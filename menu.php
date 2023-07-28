<!DOCTYPE html>
<html>
<head>
     
</head>
<body>
    <style>
             *{
            margin: 0;
            padding: 0;
            user-select: none;
            font-family: 'Poppins', sans-serif;
            

        }
        .menu{
            width: 250px;
            height: 100%;
            position: fixed;
            background-color: #333;
            color: white;

        
        }
        h2{
            background-color: #333;
            width: 250px;
            text-align: center;
            font-weight: 400;
            line-height: 70px;
            color: white;


        }
        .a1{
            width: 250px;
        }
        .menu ul li{
            padding-left: 25px;
            line-height: 35px;
            font-size: 20px;
            border-bottom: 2px solid #999999;

        }
        .menu ul li a{
            text-decoration: none;
        }
        .logout{
            padding: 7px;
            width: 70px;
            color: black;
            background-color: red;
            margin-top: 30px;
            font-size: 15px;
            margin-left: 20px;
        }


    </style>
<div class="content">
	<header>
		
	</header>
    <div class="clas1">
    <h2>Elite School</h2>
    <hr class="a1"> 
   
	<div class="menu">
		<ul>
           
			<li><a href="menu.php?page=dashboard"style="color: #ffff">Dashboard</a></li>
			<li><a href="menu.php?page=nilai"style="color: #ffff">Lihat Nilai</a></li>
			<li><a href="menu.php?page=edit"style="color: #ffff">Profile</a></li>
            
            
		</ul>
        <a href="logout.php"><button class="logout">Logout</button></a>
	</div>
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
     
            switch ($page) {
                case 'dashboard':
                    include "halaman/dashboard.php";
                    break;
                case 'nilai':
                    include "halaman/nilai.php";
                    break;
                case 'edit':
                    include "halaman/edit.php";
                    break;			
                
            }
        }else{
            include "halaman/dashboard.php";
        }
     
         ?>
    </div>
    
	</div>
</div>

</body>
</html>