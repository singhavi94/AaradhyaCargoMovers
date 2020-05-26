<?php
include_once 'add_courier_database.php';
$result = mysqli_query($conn,"SELECT * FROM myusers");
?>

<?php
$uname="admin";
$pwd="admin";
session_start();
if(isset($_SESSION['uname'])){

  include_once 'courier_report.php';

}
else
{
  if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
    $_SESSION['uname']=$uname;
    echo "<script> location.href='admin_dashboard.php'</script>";
  }
  else {
    echo "<script> alert('Username or Password is incorrect')</script>";
    echo "<script> location.href='index.html'</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<title>Courier Report Details</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="image/logo_A.png" height="10px">
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
  <link rel="stylesheet" type="text/css" href="aaradhya.css">
    <link rel="stylesheet" type="text/css" href="commonforall.css">

</head>
 
<body onload="myFunction()" style="margin:0; counter-reset: my-sec-counter;" id="tothetop">      
  <!--<div id="loader">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="background-color:;">
           <div class="loader_logo" style="margin-top: 150px;">
             <img src="image/aa logo.jpg" width="100%"><br><br>
              <img src="image/51.gif" style="height: 150px;width: 150px;margin-left: 100px;"><br>
              <h2 style="text-align: center;font-family: acme; color: #2C37A0;font-size: 20px;">Loading...Please Wait</h2>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>

  </div>
<div style="display:none;" id="myDiv" class="animate-bottom"> -->

<nav class="navbar navbar-default navbar-fixed">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="background-color: orange"></span>
        <span class="icon-bar" style="background-color: orange"></span>
        <span class="icon-bar" style="background-color: orange"></span>                        
      </button>
        <a class="navbar-brand" href="#section1" style="margin-left: -35px;margin-top: 0px;"><span style="color:#E3312B;font-family: 'Acme';"><img src="image/aa logo.jpg"  width="250px;" height="80px;"></span></a>   </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_dashboard.php">Home</a></li>
        <li><a href="add_courier_dash.php">Add Courier</a></li>
              <li><a href="courier_report.php"><span style="color: #CA656D;">Courier Reports</span></a></li>
              <!--<li><a href="track_consignment.php">Track Consignment</a></li>-->
              <li><a href="quote_report.php">Quote Report</a></li>
              <li><a href="comment_report.php" >Feedback</a></li>
             
              <li><a href="logout.php">LogOut</a></li>
       
      </ul>
    </div>
  </div>
</nav>



<div class="wave">
   <img src="image/0257.png" alt="" width="100%" style="margin-top: 60px;">
 </div> 

<div class="section_add"> 
  <div class="add_courier_well">
    <div class="container">
    <div id="add_courier" class="container-fluid" style="background-color: white;">
      <h2>Courier Report</h2>
         <div class="ready_to_well" id="Courier_data"   >
      
    <div class="row">
      <div class="col-lg-12">
        <div class="details_fetch" >
           <?php
          while($row = mysqli_fetch_array($result)) {
          
          ?>
           
            
<div class="quote_well">

   
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-10 col-xs-12"><h2 style="font-size: 16px;text-align: center;padding-bottom: 20px;color: #2C37A0;"> Details for the Couriers</h2></div>
    </div>
    
   <style>
 
     .quote_well h3:before {
    

  counter-increment: my-sec-counter;
  content: "" counter(my-sec-counter) ". ";
}
   </style>
 
     <style>
       table {overflow-x: scroll; }
     </style>
     <table class="table table-hover" width="100%">
    <thead>
      <tr>
        <th><h3 style="color:#2C37A0;text-align: center;font-size: 20px;"><i class="fa fa-list-alt" style="color: #2C37A0;"></i></h3></th>
        <th><h2 style="font-size: 18px; color: #2C37A0;">Consignee Details</h2></th>
        <th><h2 style="font-size: 18px; color: #2C37A0;">Consigner Details</h2></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><h4>Docket No. / Date</h4></td>
         <td><h4><?php echo $row["captcha"]; ?></h4></td>
         <td><h4><?php echo $row["date"]; ?></h4></td>
      </tr>
      <tr>
        <td><h4>Name</h4></td>
        <td> <h4><?php echo $row["sname"]; ?></h4></td>
        <td><h4><?php echo $row["rname"]; ?></h4></td>
      </tr>
      <tr>
        <td><h4>Email</h4></td>
        <td><h4><?php echo $row["semail"]; ?></h4></td>
        <td><h4><?php echo $row["remail"]; ?></h4></td>
      </tr>
      <tr>
        <td><h4>Mobile</h4></td>
        <td><h4><?php echo $row["smobile"]; ?></h4></td>
        <td><h4><?php echo $row["rmobile"]; ?></h4></td>
      </tr>
      <tr>
        <td><h4>From / To</h4></td>
        <td><h4><?php echo $row["saddress"]; ?></h4></td>
        <td><h4><?php echo $row["raddress"]; ?></h4></td>
      </tr>
      <tr>
        <td><h4>Actual Wt. / Chargeable Weight</h4></td>
        <td><h4><?php echo $row["actualwt"]; ?></h4></td>
        <td><h4><?php echo $row["chargewt"]; ?></h4></td>
      </tr>
      <tr>
        <td><h4>Types of Packets / No. of Pkts.</h4></td>
        <td><h4><?php echo $row["tofpkts"]; ?></h4></td>
        <td><h4><?php echo $row["nofpkts"]; ?></h4></td>
      </tr>
      <tr>
        <td><h4>Total Cost</h4></td>
        <td></td>
        <td><h4><?php echo $row["cost"]; ?></h4></td>
      </tr>
     
       
    </tbody>
  </table>
        <div class="row">
          <div class="col-lg-12 col-lg-12">
                <h4>Description : <?php echo $row["descri"]; ?></h4>
          </div>
        </div>        
  
</div>
          
           
        </div>
              
              <?php
              $i++;
              }
              ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div><!--section7-->

 

 
<div id="section10" class="container-fluid" style="margin-top: -10px;">

      <div class="row">
          <div class="footer">
            <div class="col-lg-1 " style="background-color:;"></div>
              <div class="col-lg-7 col-xs-6" style="background-color:;">
                  <h5><i class="fa fa-copyright"></i> © Copyright 2017. "Aaradhya Cargo Movers" All rights reserved.</h5>

              </div>
              <div class="col-lg-4 col-xs-6" style="background-color:;">
                <h5 style="color: white;border: none;"><b>Developed by Avinash Singh</b></h5>
              </div>
          </div>
      </div>
    
  
</div>

<!--</div> for loader-->
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
