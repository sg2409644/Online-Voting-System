<?php
include 'config.php';
if(!isset($_SESSION["name"])){
    header("Location: {$hostname}/candidate/login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Candidate Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
<style>
h1{
    color: crimson;
    padding: 10px;
    font-size: 50px;
}
    </style>
    </head>
    <body>
    
    </body>
</html>

<?php
include 'config.php';
session_start();
if(!isset($_SESSION["name"])){
    header("Location: {$hostname}/candidate/login.php");
  }
$vid=mysqli_real_escape_string($conn, $_POST['vid']);
$fname=mysqli_real_escape_string($conn, $_POST['fname']);
$age=mysqli_real_escape_string($conn, $_POST['age']);
$pname=mysqli_real_escape_string($conn, $_POST['pname']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$reg=mysqli_real_escape_string($conn, $_POST['reg']);

if(isset($_FILES['logo'])){
  $error=array();
    $file_name=$_FILES['logo']['name'];
    $file_size=$_FILES['logo']['size'];
    $file_tmp=$_FILES['logo']['tmp_name'];
    $file_type=$_FILES['logo']['type'];
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
        move_uploaded_file($file_tmp,"./upload/".$vid.$file_name);
    }
    
    else{
        print_r($error);
        die();
    }
}
$concat=$vid.$file_name;

$sql1="SELECT * FROM candidate WHERE vid='{$vid}'";
$result1=mysqli_query($conn, $sql1) or die("Query failed");

if(mysqli_num_rows($result1)>0){
    echo '<script>alert("Id already registered or Party already registered")</script>';
}

else{
$sql= "INSERT INTO candidate (vid,name,age,party,logo,password,status,region)
VALUES({$vid},'{$fname}','{$age}','{$pname}','{$concat}','{$pass}',0,'{$reg}');";
$sql.="INSERT INTO count (party,counter,region,flag) VALUES('{$pname}',0,'{$reg}',0)";
if(mysqli_multi_query($conn,$sql)){
    
}
else
{
    echo '<h2>Failed</h2>';
}
}
?>
