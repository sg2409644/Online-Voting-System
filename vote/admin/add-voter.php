<?php
session_start();
include "config.php";
if(!isset($_SESSION["name"])){
    header("Location: {$hostname}/admin/admin-login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add voters</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
<style>
h2{
  color: crimson;
  
  padding: 10px;
}
h3{
  color: crimson;
  font-size: 40px;
  padding: 5px;
}
hr
{
	border:1px solid black;
	width:15%;
}
.a{
  margin-left: 2%;
  float: left;
  height: 80vh;
  width: 40%;
  margin-top: 15px;
}
.b{
  float: right;
  height: 80vh;
  width: 50%;
  background-image: url('pic.svg');
  margin-right: 1%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
</head>
<body>
  <center><h3>Add new voters</h3><hr></center>
  <div class="a">
<form action="save-voter.php" method="POST" enctype="multipart/form-data">
Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" required><br><br>
Name: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" required><br><br>
Password: <input type="password" name="pass" required><br><br>
Region: <input type="text" name="reg" required><br><br>
Picture: <input type="file" name="pic" required><br><br>
<input type="submit" name="submit">
</form>
<br><br>
<h2>Go to Dashboard :
<a href="index.php" style="background-color: white; font-size:20px;"><input type="submit" value="Dashboard"></a></h2>
  </div>
  <div class="b">


  </div>
</body>
</html>