<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          background-color:#0d0e0e;
          background-size: cover;
         ;
        }
        * {
          box-sizing: border-box;
        }
        /* Add padding to containers */
        .container {
          
          float: center;
          padding: 50px;
          background-color: white;
          height: 500px;
          width: 35%;
          margin-top: 100px;
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
  height: 40px;
}
.registerbtn:hover {
  opacity: 1;
}
button{
    background-color: red;
    color: white;
    height: 30px;
    width: 100px;
}
button:hover{
    background-color: #0d0e0e;
}
/* Add a blue text color to links */
</style>
<form action="ceklogin1.php" method="post">
    <div class="container">
        <div class ="box"></div>
      <h1>Login</h1>
      <button>Mahasiswa</button>&nbsp;<button onclick="location.href='index2.php'" type="button">
         Admin</button>
      <hr>
      <label for="password"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <hr>
      <button class="btn" type="submit">Login</button>
    </div> 
  </form>
  
</body>
</html>