<?php
include 'config.php';
session_start();
if(!isset($_SESSION["id"])){
  header("Location: {$hostname}/user_login.php");
}
if((isset($_POST['submit']))){
    $radio=$_POST['radio'];
    $sql="UPDATE count SET counter=counter+1 WHERE region='{$_SESSION['loc']}' AND party='{$radio}';";
    $sql.="UPDATE voter SET status=1 WHERE vid={$_SESSION['id']}";
    $sql1="UPDATE `voting-count` SET count=count+1 WHERE region='{$_SESSION['loc']}'";
    $result=mysqli_query($conn,$sql1) or die('Query Failed for total updation');
    if(mysqli_multi_query($conn,$sql)){
      echo '<center><h1><font color="red">Thanks for casting your vote</font></h1></center>';
    }else{
      echo '<h2>Query Failed</h2>';
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vote</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
</head>
<body>
<center>
<img src="confirm.svg" style="height: 400px; margin-left:10%;">  <br><br>
<a href="logout.php" style="text-decoration:none;">&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i><input type="submit" value="Log out"></a></center>
</body>
</html>