<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>

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
	
	font-family:Nunito;
    color: black;
    background: rgb(255,255,255);
background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(188,178,255,1) 100%);
    user-select: none;
}
::-webkit-scrollbar {
    display: none;
}

   html, body {
  height: 100%;
}
#corners {
  border-radius: 15px;
  background: white;
  padding: 20px;
  width: 30%;
    box-shadow: 5px 5px 5px #a1abe8;
    margin-left: 35%;
}
     input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 0.5px solid darkblue;
  width:80%;
  border-color:rgb(0, 0, 62);
  color: rgb(0, 0, 62);
  border-width:1px;
    
    
    
}
    .signin{
         color: rgb(0, 0, 62);;
        font-size: 40px;
        
    }  
  @media screen and (max-width: 640px) {
 

  input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 0.5px solid black;
  width:100%;
  border-color:black;
  color:black;
  border-width:1px;
    
      
}
      .signin {
          font-size: 30px;
      } 

      
    
}   
    
   @media screen and (max-width: 960px) {
    
     #corners {
  border-radius: 15px;
  background: white;
  padding: 20px;
  width: 90%;
    box-shadow: 5px 5px 5px #a1abe8;
    margin-left: 5%;
          
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
    <br><br><br>
    <div id="corners">
        <center><font class="signin">Login</font></center><br>
    <center><img src="login-pic.svg"></center><br>
        
            <center><form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"><i class="fa fa-id-card-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Admin ID" name="vid" required><br><br>
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<input type="password" placeholder="password" name="pass" required><br><br><br>
                
                <input type="submit" class="btn btn-outline-secondary" value="Log In" name="login"></form><br><br>
                </center></div>
  
    </section> 
    <?php
        if(isset($_POST['login'])){
            include 'config.php';
            $vid=$_POST['vid'];
            $password=$_POST['pass'];
            $sql="SELECT * FROM admin WHERE id='{$vid}' AND password='{$password}'";
            $result=mysqli_query($conn,$sql) or die("Query Failed");
            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    session_start();
                    
                    $_SESSION["name"]=$row['fname'];
                    $_SESSION["id"]=$row['id'];
                    header("Location: {$hostname}/admin");
                }
            }else{
                echo '<script>alert("Username & Password does not match!")</script>';
            }
        }

    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>
</body>
</html>