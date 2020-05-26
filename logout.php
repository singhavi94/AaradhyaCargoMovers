<?php
session_start();
if(isset($_SESSION['uname'])){
  session_destroy();
  echo "<script> location.href='index.html'</script>";
}
else
{
  echo "<script> location.href='index.html'</script>";
}
?>

<!DOCTYPE html>
<html>
<title>LogOut</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="image/224.png" height="10px">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="WOW Slider, HTML Slideshow, Slideshow HTML" />
  <meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="aradhya.css">
    <link rel="stylesheet" type="text/css" href="commonforall.css">

</head>
 
<body onload="myFunction()" style="margin:0;" id="tothetop">      
  <div id="loader">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="background-color:;">
           <div class="loader_logo" style="margin-top: 150px;">
             <img src="image/aa logo.jpg" width="100%"><br><br>
              <img src="image/51.gif" style="height: 150px;width: 150px;margin-left: 100px;"><br>
              <h2 style="text-align: center;font-family: acme; color: orange;font-size: 20px;">Loading...Please Wait</h2>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>

  </div>
<div style="display:none;" id="myDiv" class="animate-bottom"> 

<nav class="navbar navbar-default navbar-fixed">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="background-color: orange"></span>
        <span class="icon-bar" style="background-color: orange"></span>
        <span class="icon-bar" style="background-color: orange"></span>                        
      </button>
      <a class="navbar-brand" href="#section1" style="margin-left: -10px;margin-top: -20px;"><b><span style="color:orange;font-family: 'Acme';"><img src="image/aa logo.jpg"  width="250px;" height="80px;"></span></a>   </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="admin_dashboard.php">Home</a></li>
              
       
      </ul>
    </div>
  </div>
</nav>



<div class="wave">
   <img src="image/0257.png" alt="" width="100%" style="margin-top: 60px;">
 </div> 

  <div class="section_add">
      <div class="container">
        <div class="add_courier_well">
          <div id="add_courier" class="container-fluid">
            <h2>You Are Successfully Logout.</h2>
           <div class="well" style="background-color: white;border-radius: 0px;border:1px solid orange;">
              <div class="row">
              <div class="col-lg-4"></div>
              <div class="col-lg-4">
                <img src="image/logout.gif" width="100%">
              </div>
              <div class="col-lg-4"></div>
            </div> 
           </div>
          </div>
        </div>
      </div>
    </div>



     <div class="wave">
   <img src="image/0256.png" alt="" width="100%">
 </div>


 

</div><!-- for loader-->
   <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>                     
</body>
</html>
