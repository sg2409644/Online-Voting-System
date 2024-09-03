<?php
include 'config.php';
$sql="SELECT * FROM count";
$result=mysqli_query($conn,$sql) or die('Query Failed');
if((mysqli_num_rows($result))>0){
  while($row=mysqli_fetch_assoc($result)){
    $sql1="SELECT MAX(counter) FROM count WHERE region='{$row['region']}'";
    $result1=mysqli_query($conn,$sql1) or die('Max Query Failed');
    $row1=mysqli_fetch_assoc($result1);
    $max=$row1['MAX(counter)'];
    $sql2="UPDATE count SET flag=1 WHERE counter={$max} AND region='{$row['region']}'";
    $result2=mysqli_query($conn,$sql2) or die('Flag Query Failed');
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
          <h1 style="color: crimson;"><center>Voting Result</center></h1><hr style="width: 15%; border:1px solid black;">
  <table class="table table-bordered" style="font-size: 20px;">
    <thead>
      <tr>
        <th>Region</th>
        <th>Winning Candidate</th>
        <th>Party</th>
        <th>Total vote</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'config.php';
      $sql="SELECT * FROM `count` WHERE flag=1";
      $result=mysqli_query($conn,$sql) or die('Query Failed');
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
        ?>
      <tr>
        <td><?php echo $row['region']; ?></td>
        <td><?php 
        $sql1="SELECT name FROM `candidate` WHERE party='{$row['party']}' AND region='{$row['region']}'";
        $result1=mysqli_query($conn,$sql1) or die('Candidate Query Failed');
        $row1=mysqli_fetch_assoc($result1);
        echo $row1['name'];
        ?></td>
        <td><?php echo $row['party'];?></td>
        <td><?php echo $row['counter'];?></td>
      </tr>
     <?php
        }
      }else{
        echo '<h1><center>No data Found</center></h1>';
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>

