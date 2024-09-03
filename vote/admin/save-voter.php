<?php
session_start();
include "config.php";
if(!isset($_SESSION["name"])){
    header("Location: {$hostname}/admin/admin-login.php");
}
?>
<?php
include 'config.php';
$id=mysqli_real_escape_string($conn,$_POST['id']);
  $fname=mysqli_real_escape_string($conn,$_POST['fname']);
  $pass=mysqli_real_escape_string($conn,$_POST['pass']);
  $reg=mysqli_real_escape_string($conn,$_POST['reg']);
if(isset($_FILES['pic'])){
  $error=array();
    $file_name=$_FILES['pic']['name'];
    $file_size=$_FILES['pic']['size'];
    $file_tmp=$_FILES['pic']['tmp_name'];
    $file_type=$_FILES['pic']['type'];
    //explode--> for converting a string to an array
    //explode--> explode(separator,string,limit(optional))
    //end--> the last value
    //strtolower--> converting the last string to lower case
    $file_exp=explode('.',$file_name);
    $file_ext=end($file_exp);
    $extensions = array("jpeg","jpg","png");
    //in_array will search the extension was in the $extensions array or not
    if(in_array($file_ext,$extensions)=== false){
        $error[]="This extension file does not allowed! Choose jpg or png image";
    }
    
    
    
    if(empty($error)==true){
        move_uploaded_file($file_tmp,"../pic-upload/".$id.$file_name);
    }
    else{
        print_r($error);
        die();
    }
}
  
  $concat=$id.$file_name;
  $sql="SELECT vid FROM voter WHERE vid='{$id}'";
  $result=mysqli_query($conn, $sql) or die("Query failed");
  if(mysqli_num_rows($result)>0){
    echo '<script>alert("ID Already exists")</script>';
}else{
  $sql1="INSERT INTO voter (vid,fname,password,status,region,pic) VALUES({$id},'{$fname}','{$pass}',0,'{$reg}','{$concat}')";
  $result1=mysqli_query($conn, $sql1) or die("Query failed1");

  $sql2="SELECT * FROM `voter-count` WHERE region='{$reg}'";
  $result2=mysqli_query($conn, $sql2) or die("Query failed2");

  if(mysqli_num_rows($result2)>0){
    $sql3="UPDATE `voter-count` SET count=count+1 WHERE region='{$reg}'";
    $result3=mysqli_query($conn,$sql3) or die('Query Failed 3');
  }else{
    $sql4="INSERT INTO `voter-count` (region,count) VALUES('{$reg}',1);";
    $sql4.="INSERT INTO `voting-count` (region,count) VALUES('{$reg}',0)";
    $result4=mysqli_multi_query($conn,$sql4) or die('Query Failed 4');
  }
  header("Location: {$hostname}/admin/add-voter.php");
        
}

?>