<?php
include 'config.php';
$vid=$_GET['id'];
$sql="DELETE FROM candidate WHERE vid={$vid}";
$result=mysqli_query($conn,$sql) or die('Query Failed');
if(mysqli_query($conn,$sql)){
  header("Location: http://localhost/vote/admin");
}
?>