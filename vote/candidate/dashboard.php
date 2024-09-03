<?php
include 'config.php';
session_start();
if(!isset($_SESSION["name"])){
  header("Location: {$hostname}/candidate/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Candidate Dashboard</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
<style>
h1{
  color: crimson;
  font-size: 60px;
}
hr{
  width: 15%;
  border: 2px solid black;
}
h4{
  font-size: 20px;
}
</style>
</head>
<body>
<center><h1><?php echo $_SESSION['name']; ?> Dashboard</h1><hr></center>
<div class="container">            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Party Name</th>
        <th>Logo</th>
        <th>Region</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td><?php echo $_SESSION['name']; ?></td>
        <td><?php echo $_SESSION['party']; ?></td>
        <td><img src="../candidate/upload/<?php echo $_SESSION['logo']; ?>" height="50"></td>
        <td><?php echo $_SESSION['region']; ?></td>
        <td><?php 
        if($_SESSION['status']==0){
          echo "<b><font color='red'>Still Not Approved</font></b>";
        }else{
          echo "<b><font color='green'>Approved</font></b>";
        }
        ?></td>
      </tr>
    </tbody>
  </table>
  <h4>To Logout :
<a href="logout.php" style="background-color: white;"><input type="submit" value="Logout"></a></h4>
</div>
</body>
</html>