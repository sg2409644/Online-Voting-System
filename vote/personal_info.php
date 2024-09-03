<?php
session_start();
include "config.php";
if(!isset($_SESSION["name"])){
    header("Location: {$hostname}/user_login.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Personal Info</title>

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
        width: 50%;
        margin-top: 100px;
        background-color: white;  
         border-radius: 15px;
        box-shadow: 5px 5px 5px #a1abe8;
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
    
    

@media only screen and (max-width: 960px) {
  .box{
        width: 95%;
        margin-top: 30px;
        
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
    <center><div class="row box">
     <div class="col-md-12 col-lg-6 image">
        
         <img src="./pic-upload/<?php echo $_SESSION['pic']; ?>" style="height: 250px; margin-top: 20%;">
         
        </div>
    <div class="col-md-12 col-lg-6 info">
        <h2>Personal info<hr style="width: 80%"></h2>
        <h5><div class="row">
            <div class="col-5 col-lg-5"><b>Name </b>:</div>
            <div class="col-7 col-lg-7"><?php echo $_SESSION['name'];?></div>
            </div><br>
        <div class="row">
            <div class="col-5 col-lg-5"><b>ID </b>:</div>
            <div class="col-7 col-lg-7"><?php echo $_SESSION['id'];?></div>
            </div><br>
        
        <div class="row">
            <div class="col-5 col-lg-5"><b>Assembly </b>:</div>
            <div class="col-7 col-lg-7"><?php echo $_SESSION['loc'];?></div>
            </div><br>
            
            <div class="form-check">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">
    I hereby confirm all my details are true and I want to vote&nbsp;
  </label>
  </div>
            
             <br>
             <input type="submit" class="btn btn-outline-dark" value="Continue" name='btn'><br>
             </form>
             <?php
                if(isset($_POST['btn'])){
                    header("Location: {$hostname}/vote_final.php");
                }
                ?>
            
            
        </h5>
       

        </div>
     </div></center> 
    </section>     
<script>

    
    
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>
</body>
</html>