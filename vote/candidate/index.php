<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Candidate Registration</title>

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
    user-select: none;
}
::-webkit-scrollbar {
    display: none;
}

   html, body {
  height: 100%;
}
    .rest{
        background: rgb(255,214,178);
background: linear-gradient(0deg, rgba(255,214,178,1) 0%, rgba(255,254,237,1) 65%, rgba(255,255,255,1) 100%);
        height: 100%;
    }

#corners {
  border-radius: 15px;
  background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(254,243,230,1) 100%);
  padding: 20px;
  width: 50%;
    box-shadow: 5px 5px 5px #dbaa70;
    margin-left: 25%;
}
     input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 0.5px solid darkblue;

  border-color:rgb(0, 0, 62);
  color: rgb(0, 0, 62);
  border-width:1px;
    
    
    
}
    .signin{
         color: #5e3300;
        font-size: 30px;
        
    }  
  @media screen and (max-width: 640px) {

  input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 0.5px solid black;

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
  background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(254,243,230,1) 100%);
  padding: 20px;
  width: 95%;
    box-shadow: 5px 5px 5px #dbaa70;
    margin-left: 2%;
          margin-top: -40px;
        }

    }

</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
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
    <section class="rest">
   <br><br><br><br>
    <div id="corners">
    <div class="row">
        <div class="d-none d-lg-block col-lg-5"><br><br>
        <img src="Documents-amico.svg">
        
        </div>
        <div class="col-lg-7">
            <font class="signin">Candidate Application</font><hr class="uk-divider-icon">
        <form action="save-application.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-lg-6">
      <label for="vid">Voter ID&nbsp;&nbsp;</label>
      <input type="text" name="vid" required id="vid" placeholder="ID no">
    </div>
      <div class="form-group col-lg-6">
      <label for="fname">Name&nbsp;&nbsp;</label>
      <input type="text" name="fname" required id="fname" placeholder="Name">
    </div>
    <div class="form-group col-lg-6">
      <label for="age">Age&nbsp;&nbsp;</label>
      <input type="text" name="age" required id="age" placeholder="Age">
    </div>
    <div class="form-group col-lg-6">
      <label for="pname">Party name&nbsp;&nbsp;</label>
      <input type="text" name="pname" required id="pname" placeholder="Party name">
    </div>
      <div class="form-group col-lg-6">
      <label for="logo">Logo&nbsp;&nbsp;</label>
      <input type="file" name="logo" required id="logo" style="border: none;">
    </div>
    <div class="form-group col-lg-6">
      <label for="region">Region&nbsp;&nbsp;</label>
      <input type="text" name="reg" required id="reg" placeholder="Region">
    </div>
    <div class="form-group col-lg-6">
      <label for="pass">Password&nbsp;&nbsp;</label>
      <input type="password" name="pass" required id="pass" placeholder="Password">
    </div>
  </div>

  <input type="submit" class="btn btn-outline-dark" value="Submit" name="submit">
  
</form>
<span style="font-weight:bold;">Already Register!&nbsp;&nbsp;<a href="login.php"><input type="submit" class="btn btn-success" value="Login" ></a></span>      
            
            
        </div>
        
        </div>
        </div>
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