<?php
include 'config.php';
$vid=$_GET['id'];
$sql="UPDATE candidate SET status=1 WHERE vid={$vid}";
$result=mysqli_query($conn,$sql) or die('Query Failed');
if(mysqli_query($conn,$sql)){
  header("Location: http://localhost/vote/admin");
}
?>