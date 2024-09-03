<?php
session_start();
include 'config.php';
if(!isset($_SESSION["id"])){
    header("Location: {$hostname}/user_login.php");
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

<style>
html{
	scroll-behavior : smooth;

}
body{
	 background: rgb(255,255,255);
background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(188,178,255,1) 100%);
     height: 100%;   
	font-family:Nunito;
    color: black;
    user-select: none;
}
::-webkit-scrollbar {
    display: none;
}

   html, body {
  height: 100%;
}
    .box{
        width: 40%;
        height: 450px;
        margin-top: 10px;
        background-color: white;  
         border-radius: 15px;
        box-shadow: 5px 5px 5px #a1abe8;
overflow-y: scroll;
  overflow-x: hidden;
        padding-top: 20px;
    }
    
        
    h2{
        font-family: Nunito;
        text-align: left;
        margin-top: 10px;
    }
    h5{
        font-family: Nunito;
        text-align: left;
    }
    
     .square_btn{
    display: inline-block;
    padding: 0.3em 1em;
    text-decoration: none;
    border-radius: 4px;
    color: #ffffff;
    background-image: -webkit-linear-gradient(#005098 0%, #7796dc 100%);
    background-image: linear-gradient(#005098 0%, #7796dc 100%);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
         border-bottom: solid 3px #5e7fca;}
    
    .square_btn:active{
    -ms-transform: translateY(4px);
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
    box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
    border-bottom: none;
}

@media only screen and (max-width: 960px) {
  .box{
        width: 95%;
        margin-top: 30px;
      height: 580px;
        
    }
  
  
}
    
</style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light">
         <a class="navbar-brand" href="#"><b><img src="https://www.pngrepo.com/download/7938/vote.png" style="height: 22px;">&nbsp;&nbsp;Vote</b></a>     
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
    <span class="navbar-toggler-icon"></span>
 </button>
        
        
    <div class=" collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">home&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">about&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>
        </ul>
        </div>
</nav>
 <section>
      <center><h4 style="color: darkslategray;"><i class="fa fa-info-circle" aria-hidden="true"></i> Your assembly is <?php echo $_SESSION['loc']; ?><br>Kindly scroll for more options !</h4>
   <div class="row box">
   <?php
    include 'config.php';
    $sql="SELECT * FROM candidate WHERE region='{$_SESSION['loc']}' AND status=1";
    $result=mysqli_query($conn,$sql) or die('query failed');
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    ?>
     <div class="col-12 col-lg-12">
         <div class="row">
          <div class="col-12 col-lg-6">
                <div class="form-check">
  <form action="vote-store.php" method="POST"> 
          
  <input class="form-check-input" type="radio" value="<?php echo $row['party']; ?>" name="radio" id="flexRadioDefault1" style="margin-top: 15%;" required>
  &nbsp;&nbsp;<img src='candidate/upload/<?php echo $row['logo'] ?>'style="height: 100px;">
         </div>
         </div>
         <div class="col-12 col-lg-6"><br>
         <label class="form-check-label" for="flexRadioDefault1" style="text-align: left;">
   <b><?php echo $row['name'];  ?></b><br><?php echo $row['party'];  ?>
  </label>
         </div>
         </div>
        </div><br>
        <?php 
        }
    }
    else{
        echo '<center><h2>No Candidate found</h2></center>';
    }
    ?>
    
         <!--<div class="col-12 col-lg-12">
         <div class="row">
          <div class="col-12 col-lg-6">
                <div class="form-check">
            
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-top: 15%;">&nbsp;&nbsp;<img src="cpim.png" style="height: 100px;">
         </div>
         </div>
         <div class="col-12 col-lg-6"><br>
         <label class="form-check-label" for="flexRadioDefault1" style="text-align: left;">
   <b>Buddhadev Bhattachariya</b><br>Communist Party of India ( CPIM )
  </label>
         </div>
         </div>
        </div><br>
          <div class="col-12 col-lg-12">
         <div class="row">
          <div class="col-12 col-lg-6">
                <div class="form-check">
            
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-top: 15%;">&nbsp;&nbsp;<img src="congress.png" style="height: 100px;">
         </div>
         </div>
         <div class="col-12 col-lg-6"><br>
         <label class="form-check-label" for="flexRadioDefault1" style="text-align: left;">
   <b>Mina Goon</b><br>Indian National Congress
  </label>
         </div>
         </div>
        </div><br>
          <div class="col-12 col-lg-12">
         <div class="row">
          <div class="col-12 col-lg-6">
                <div class="form-check">
            
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-top: 15%;">&nbsp;&nbsp;<img src="bjp.png" style="height: 100px;">
         </div>
         </div>
         <div class="col-12 col-lg-6"><br>
         <label class="form-check-label" for="flexRadioDefault1" style="text-align: left;">
   <b>Dilip Ghosh</b><br>Bharatiya Janata Party ( BJP )
  </label>
         </div>
         </div>
        </div>-->
        <br>
          <br>
        
     </div></center>
    </section><br>
    <center><input type="submit" name='submit' class="square_btn" value="Vote Now"></center></form>
<br><a href="logout.php" style="text-decoration:none;">&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i><input type="submit" value="Log out"></a>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>

</body>
</html>