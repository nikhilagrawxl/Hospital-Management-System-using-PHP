<?php
  include 'login.php';
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
  </head>
  <body>
  <h1 style="font-family:verdana; font-size:150%; text-align:center; color:2F4F4F">HOSPITAL MANAGEMENT SYSTEM</h1>
    <div id="main" align="center">
      <div id="login" align="center">
        <form action="" method="POST">
          <p>
          <img src="img-01.jpg" alt="Italian Trulli">
            <br>
            <br>
            <label for="employeeid">Employee Id: </label><br>
            <input id="employeeid" name="EMPID" placeholder="Employee ID" type="text"><br><br>
            <input type="submit" name="SUBMIT" value="    LOGIN    ">
          </p>
          <span style="color:red;"><?php echo $errorMessage; ?></span>
        </form>
      </div>
  </body>
  <style>
body {color: white;background: #9053c7;
    background: -webkit-linear-gradient(
-135deg,#c850c0,#4158d0);
    background: -o-linear-gradient(-135deg,#c850c0,#4158d0);
    background: -moz-linear-gradient(-135deg,#c850c0,#4158d0);
    background: linear-gradient(
-135deg,#c850c0,#4158d0)

margin: 0;
    font-family: 'Source Sans Pro';
    font-size: 3rem;
    font-weight: 800;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;}

  #main{
    text-align: center;
  }
  #login{
    background-color: white;
    padding:20px;
    border-radius: 8px;
    width:95%;
    margin-left: 0%;
    min-height: 90vh;
  }
  label{
    text-transform: uppercase;
    font-weight: bolder;
  }
  p{
    border-radius: 7px;
    padding:10px;
  }
  input[type=text], input[type=password]{
    text-align: center;
    padding:5px;
    border-radius: 3px;
  }
  </style>
</html>
