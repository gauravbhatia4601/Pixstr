<?php
session_start();
 if(!isset($_SESSION["username"]))
{  header("Location:../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel=" icon" href="../img/camera-leans-logo-ADF433F5ED-seeklogo.com.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <!-- Bootstrap  CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- Custom styles -->
    
    <link type="text/css" href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/animate.css"/>
                   <link rel="stylesheet" href="../css/Glyphicons.css">
                  
                    <!--Google Fonts-->
      <link rel="stylesheet" href="https://www.google.com/fonts"/>
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
                    <!--Javascript-->
      
  </head>

  <body>

    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top animated flipInX" id="nav">
      <div class="container">
        <a class="navbar-brand" href="#" ><img src="../img/camera-leans-logo-ADF433F5ED-seeklogo.com%20(1).png" class="custom-logo" id="logo" alt="" itemprop="logo"/></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="fa fa-bars" style="font-size:30px;color:white;"></span>
        </button>
        <div class="collapse navbar-collapse navigation clearfix mobile-menu-wrapper" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
              <a class="nav-link active"  href="../home/index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="../home/about.php" >About</a></li>
              <li class="nav-item"><a href="../home/category.php" class="nav-link" >Category</a></li>
              <li class="nav-item"><a href="../login/login.php" class="nav-link btn btn-primary" id="logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
      
    
   
   <header class="position-fixed" id="wall">
      <div id="carouselExampleIndicators" class="carousel carousel-fade"  data-ride="carousel" >
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active animated fadeIn " style="visibility: visible; animation-duration: 2s;">
              <img class="d-block img-fluid" src="../img/beautiful-landscapes-wallpaper-wallpapers.jpg"/>
          </div>
          <div class="carousel-item animated fadeIn" style="visibility: visible; animation-duration: 2s;">
              <img class="d-block img-fluid" src="../img/3977773-travel-wallpapers.jpg">
          </div>
          <div class="carousel-item animated fadeIn" style="visibility: visible; animation-duration: 2s;">
              <img class="d-block img-fluid" src="../img/original.jpg"/>
          </div>
          </div>
      </div>   
      </header>
        
    

   