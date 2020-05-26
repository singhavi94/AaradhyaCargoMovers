<?php
include_once 'add_courier_database.php';
$result_courier = mysqli_query($conn,"SELECT * FROM myusers");
?>


<?php
$uname="admin";
$pwd="admin";
session_start();
if(isset($_SESSION['uname'])){

  include_once 'add_courier_dash.php';

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
<title>Add Courier Details</title>
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
 
<body onload="myFunction()" style="margin:0;" id="tothetop">      
  <div id="loader">
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
<div style="display:none;" id="myDiv" class="animate-bottom"> 

<nav class="navbar navbar-default navbar-fixed">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="background-color: orange"></span>
        <span class="icon-bar" style="background-color: orange"></span>
        <span class="icon-bar" style="background-color: orange"></span>                        
      </button>
       <a class="navbar-brand" href="#" style="margin-left: -35px;margin-top: 0px;"><span style="color:#E3312B;font-family: 'Acme';"><img src="image/aa logo.jpg"  width="250px;" height="80px;"></span></a>  </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_dashboard.php">Home</a></li>
         <li><a href="add_courier_dash.php"><span style="color: #CA656D ;"> Add Courier</span></a></li>
              <li><a href="courier_report.php">Courier Reports</a></li>
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
    <div id="add_courier" class="container-fluid">
        <div class="row">
         <form method="post" action="add_user_process.php">
            <div class="col-lg-12 col-xs-12" style="background-color:;">
              <div class="ready_to_well">
                <div class="well">
                  <h2>Add New Courier</h2>
                  <div class="row">
                    <div class="col-lg-12 col-xs-12" style="background-color:;">
                      <div class="row">
                        <div class="col-lg-6" style="background-color:;padding-top: 15px;">
                          <div class="sender_data">
                            <h2 style='font-size: 16px;text-align:left;'>Consigner Details :
                              <p id="userCaptcha" style='font-size: 16px;text-align: right;margin-top: -15px;'></p> </h2>
                            
                            <hr />

                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Docket Number :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control"  name="captcha" required="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Sender Name :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="sname" name="sname" required="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Mobile :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="smobile" name="smobile" required="">
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Email :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="email" class="form-control" id="semail" name="semail" required="">
                                </div>
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">From :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="saddress" name="saddress" required="">
                                </div>
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Types of Pkts. :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="saddress" name="tofpkts" required="">
                                </div>
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Actual Wt. :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="saddress" name="actualwt" required="">
                                </div>
                              </div>
                            </div>
                            
                             
                          </div>
                        </div>
                    
                        <div class="col-lg-6">
                          <div class="reciever_data">
                              <h2 style='font-size: 16px;'>Consignee Details</h2>
                              <hr />
                               <div class="row">
                              <div class="col-lg-4"> <label for="usr">Date :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="rname" name="date" required="">
                                </div>
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-lg-4"> <label for="usr">Reciever Name :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="rname" name="rname" required="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Mobile :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="rmobile" name="rmobile" required="">
                                </div>
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Email :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="email" class="form-control" id="remail" name="remail" required="">
                                </div>
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">To :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="radd" name="raddress" required="">
                                </div>
                              </div>
                            </div> 

                             <div class="row">
                              <div class="col-lg-4"> <label for="usr">Grand Total :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="radd" name="cost" required="">
                                </div>
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">No. of Pkts. :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="saddress" name="nofpkts" required="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4"> <label for="usr">Chargeable Wt. :</label></div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="saddress" name="chargewt" required="">
                                </div>
                              </div>
                            </div>
                            
                          </div>
                        </div>

                      </div>
                         
                      <div class="row">
                              <div class="col-lg-2"> <label for="usr">Description :</label></div>
                              <div class="col-lg-10">
                                <div class="form-group">
                                  <textarea class="form-control" id="radd" name="descri"></textarea>
                                </div>
                              </div>
                            </div>
                    </div>
                     
                  </div> 
                  
                     
                  
                  <br> 
                  <div class="row">
                    <div class="col-lg-12"><button class="btn btn-info btn-block" type="submit" name="btn-save">Save</button></div>
                  </div>
                </div><!--well-->
              </div><!--ready_to Well-->
            </div>
           </form>
        </div>
        
         
         
  </div><!--section7-->

  </div>

    
   </div>


 
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
