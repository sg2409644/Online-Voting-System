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
  <style>
    a{
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 5px 10px;
    color: #fff;
    background-color: #e67e22;
    text-decoration: none;
    border-radius: 3px;
    float: right;
}
a:nth-child(2){
    background-color: #e74c3c;
    margin: 0 0 0 5px;
}
a:hover{
  text-decoration: none;
  color: white;
}
  </style>
<title>Analytics</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >
<a href="logout.php" style="background-color: white;"><input type="submit" value="Logout"></a></h3>
<div class="container" style="overflow: none; width:80%;">
  <h1>Analytics</h1>
  
   
  <div class="row">
    <div class="col-sm-6" style="background-color:lavender; overflow:none;">
    <div class="container">
    <h2> Region Wise Voter Count</h2>
    
             
  <table class="table table-dark table-striped" style="width: 45%; font-size: 20px;">
  <?php
    include 'config.php';
    $sql="SELECT * FROM `voter-count`";
    $result=mysqli_query($conn,$sql) or die('Query Failed');
    if(mysqli_num_rows($result)>0){

    
  ?>
    <thead>
      <tr>
        <th>Region</th>
        <th>No of Voter</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row=mysqli_fetch_assoc($result)){

    ?>
      <tr>
        <td><?php echo $row['region']; ?></td>
        <td><?php echo $row['count']; ?></td>
      </tr>
    <?php
      }
    ?>
    </tbody>
    <?php }
    ?>
  </table>
</div>
    </div>
    <div class="col-sm-6" style="background-color:pink;">
      
      <div class="container" style="width:100%;">
  <h2> Region Wise Voting Percentage</h2>
         
  <table class="table table-dark table-striped" style="width: 90%; font-size: 20px;">
  <?php
    include 'config.php';
    $sql1="SELECT * FROM `voting-count`";
    $sql="SELECT * FROM `voter-count`";
    $result=mysqli_query($conn,$sql) or die('Query Failed');
    $result1=mysqli_query($conn,$sql1) or die('Query Failed');
    if((mysqli_num_rows($result1)>0) and (mysqli_num_rows($result)>0)){

    
    ?>
    <thead>
      <tr>
        <th>Region</th>
        <th>Perentage</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while(($row1=mysqli_fetch_assoc($result1)) and ($row=mysqli_fetch_assoc($result))){

    ?>
      <tr>
        <td><?php echo $row1['region']; ?></td>
        <td>
        <?php

        $done=$row1['count'];
        $total=$row['count'];
        $ratio=($done/$total)*100;
        ?>
        <div class="progress" >
        <div class="progress-bar bg-success" style="width: <?php echo $ratio.'%'?>"><?php echo "<font color='black'><b>$ratio%<b></font>" ?></div>
        </div>
        
        </td>
      </tr>
    <?php
      }
    
    ?>
    </tbody>
    <?php 
    }
    ?>
  </table>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>