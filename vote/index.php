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
        background: rgb(217,227,255);
background: linear-gradient(326deg, rgba(217,227,255,1) 0%, rgba(255,255,255,1) 43%, rgba(255,255,255,1) 100%);
        height: 100%;
    }
    .padding-top{
        padding-top: 10%;
    } 
    h1{
        font-family: Nunito;
        color: rgb(0, 0, 62);
        text-align: end;
        margin-right: 80px;
        margin-top: 140px;
        margin-bottom: 5px;
    }  
    h3{
        color: rgb(0, 0, 62);
        text-align: end;
        margin-right: 80px;
        margin-top: 0px;
    }
    h5{
        color: rgb(0, 0, 62);
        text-align: end;
        margin-right: 80px;
        margin-left: 50px;
        
    }
    .square_btn{
        margin-left: 42%;
    display: inline-block;
    padding: 0.3em 1em;
    text-decoration: none;
    border-radius: 4px;
    color: #ffffff;
    background-image: -webkit-linear-gradient(#6795fd 0%, #67ceff 100%);
    background-image: linear-gradient(#6795fd 0%, #67ceff 100%);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
    border-bottom: solid 3px #5e7fca;
  }
.square_btn2{
        margin-left: 3%;
    display: inline-block;
    padding: 0.3em 1em;
    text-decoration: none;
    border-radius: 4px;
    color: #ffffff;
    background-image: -webkit-linear-gradient(#f68c46 0%, #ffd78d 100%);
    background-image: linear-gradient(#f68c46 0%, #ffd78d 100%);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
    border-bottom: solid 3px #e37712;
  }
.square_btn:active{
    -ms-transform: translateY(4px);
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
    box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
    border-bottom: none;
}
.square_btn2:active{
    -ms-transform: translateY(4px);
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
    box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
    border-bottom: none;
}
@media only screen and (max-width: 960px) {
  .square_btn{
       margin-left: 50%;
    }
    .square_btn2{
        margin-top: 2%;
       margin-left: 38%;
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
            <li class="nav-item active">
                <a class="nav-link" href="index.html">home&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">about&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>
        </ul>
        </div>
</nav>
    <section class="rest">
    
        <div class="row">
        <div class="d-none d-lg-block col-lg-7">
      <img src="6386.jpg" width="1000">
        </div>
        <div class="col-lg-5">
      <h1><b>Online Voting</b></h1>
            <h3>Landing Page</h3>
            <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </h5><br>
            <a href="user_login.php"><button class="square_btn">Vote now</button></a>
            <a href="candidate/index.php"><button class="square_btn2">Candidate Login</button></a>
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