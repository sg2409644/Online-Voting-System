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
<title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
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
}
a:nth-child(2){
    background-color: #e74c3c;
    margin: 0 0 0 5px;
}
a:hover{
  text-decoration: none;
  color: white;
}
h2{
  color: crimson;
  border: 2px dotted black;
  padding: 10px;
}
h3{
  color: crimson;
  
  padding: 5px;
}
hr
{
	border:1px solid black;
	width:15%;
}
body{
  background-color: white;
}
  </style>
</head>
<body>
<h1>&nbsp; &nbsp;Admin Dashboard </h1>
<br><br>
<h3>&nbsp; &nbsp;To add new voter :
<a href="add-voter.php" style="background-color: white;"><input type="submit" value="Add Voter"></a></h3>
<h3>&nbsp; &nbsp;To view Analytics :
<a href="analytics.php" style="background-color: white;"><input type="submit" value="Analytics"></a></h3>
<h3>&nbsp; &nbsp;To Logout :
<a href="logout.php" style="background-color: white;"><input type="submit" value="Logout"></a></h3><br><br>
<div class="container">
  <center><h1>Candidate Application Approval</h1><hr></center>
  <?php
  include 'config.php';
  $sql="SELECT * FROM candidate WHERE status=0";
  $result=mysqli_query($conn,$sql) or die('Query Failed');
  if(mysqli_num_rows($result)>0){
    
  
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Voter ID</th>
        <th>Full Name</th>
        <th>Party</th>
        <th>Logo</th>
        <th>Region</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row=mysqli_fetch_assoc($result)){
      
    ?>
      <tr>
        <td><?php echo $row['vid']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['party']; ?></td>
        <td><img src="../candidate/upload/<?php echo $row['logo']; ?>" height="50"></td>
        <td><?php echo $row['region']; ?></td>
        <td><a href="approve.php?id=<?php echo $row['vid'] ?>">Approve</a>
        <a href="decline.php?id=<?php echo $row['vid'] ?>">Decline</a></td>
        
      </tr>
      <?php
    }
    ?>
      
    </tbody>
  </table>
  <?php
  }else{
    echo '<br><br><center><h2>No Pending Task</h2></center>';
  }
  ?>
</div>
</body>
</html>