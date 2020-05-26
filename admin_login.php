<!DOCTYPE html>
<html>
<title>Login</title>
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
  <div class="section_login">
    <div class="container">
    	<div class="row">
    		<div class="col-lg-2"></div>
    		<div class="col-lg-8">
          <div class="user_login_well">
            <div class="well" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                <div class="row">
                  <div class="col-lg-6 col-xs-6" style="background-color: #2C37A0;border-top-left-radius: 0px;border-bottom-left-radius: 20px;">
                    <div class="whole_image">
                      <img src="image/06.png" width="100%">
                   
                    <h2 style="color:white">Aaradhya Cargo Movers</h2>
                     </div>

                  </div>

                  <div class="col-lg-6 col-xs-6" style="background-color:transparent;padding-bottom: 22px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;" >
                     <div class="login_theme">
                    <h2>Login Your Account</h2>
                   
                    <div class="row">
                      <div class="col-lg-1"></div>
                      <div class="col-lg-10">
                        <form action="admin_dashboard.php" method="post">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" required="" name="uname">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" required="" name="pwd">
                      </div>
                      <p id="worng_cred" style="color: orange;font-family: times new roman"></p>

                     <br>
                        <!--<div class="insert_captcha">
                          <div class="form-group">
                            <div class="dis_image" style="height:35px;width:100%; 
                            background-image:url(image/dis.jpg);border-top-right-radius: 20px;border-top-left-radius: 0px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border:1px solid orange;">
                                 <h3 id="demo" style="color:white;letter-spacing:10px;font-family:arial;margin-top:5px;padding-left: 80px;"></h3> 
                            </div>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="insert_cap" placeholder="Enter Captcha Here" required="">
                          </div>
                          </div>-->
                      
                       
                     <div class="row">
                       <div class="col-lg-6 col-xs-6">
                         <button class="btn btn-info btn-block" name="login" type="submit" onclick="valid();">Login</button>
                       </div>
                       <div class="col-lg-6 col-xs-6"> 
                        <button class="btn btn-danger btn-block" type="reset">Reset</button>
                       </div>
                     </div>

                    </form>
                      </div>
                      <div class="col-lg-1"></div>
                    </div>
<div class="row">
   <div class="login_theme_img">
  <div class="col-lg-2">
   
      <div class="well" style="background-color:transparent;border-radius: 50%;border:none;height: 70px;width: 70px;">
        <img src="image/92.jpg" width="100%" >
      </div>
    </div>
 
   <div class="col-lg-10" style="background-color:;">
     <h4>Dushyant Singh</h4>
   </div>
    </div>
</div>
<style>
  .login_theme_img img{border-radius: 50%; height: 60px;width: 60px;padding:2px;margin-top: 70px;}
  .login_theme_img h4{font-family: Acme;color: #2C37A0;padding-top:80px;}
</style>


                  </div>
                  </div>
                </div>
            </div>
          </div>
    			
    		</div>
    		<div class="col-lg-2"></div>
    	</div>
  </div>
</div>
<style>
  .section_login{background-image: url(image/21.jpg);background-repeat: no-repeat;background-size: cover; height: 625px;}
  .user_login_well .well{background-color:transparent; border-radius: 0px;padding: 0px;border:none;}
  .user_login_well:hover{box-shadow: 0px 0px 40px 6px rgba(249, 241, 239,0.9);cursor: pointer;transition: 0.8s;}
  .login_theme{padding-top: 40px;}
  .login_theme label{color:white;font-family: Acme;letter-spacing: 2px;}
  .login_theme h2{color: black;font-family: Acme;text-align: center;font-size: 24px;color: white;padding-bottom: 20px;margin-top: 50px;}
   .login_theme input{border-top-right-radius: 20px;border-top-left-radius: 0px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;padding: 15px;border:1px solid #2C37A0;}
  .whole_image img{padding-top: 90px;padding-bottom: 90px;}
   .whole_image h2{font-family: Acme;text-align: center;color: #0c8ff9;}
  .user_login_well{margin-top: 70px;}
</style>

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
<script>
  function capt()
  {
     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
          'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', 
              '0','1','2','3','4','5','6','7','8','9');
           var i;
           for (i=0;i<6;i++){
               var a = alpha[Math.floor(Math.random() * alpha.length)];
               var b = alpha[Math.floor(Math.random() * alpha.length)];
               var c = alpha[Math.floor(Math.random() * alpha.length)];
               var d = alpha[Math.floor(Math.random() * alpha.length)];
               var e = alpha[Math.floor(Math.random() * alpha.length)];
               
                            }
               var code = a + '' + b + '' + '' + c + '' + d + '' + e;
              document.getElementById("demo").innerHTML = code;
               document.getElementById("demo").value=code;
  
  }
  function valid()
    
    {
       var capt1=document.getElementById("demo").value;
         var capt2= document.getElementById("insert_cap").value;
    if(capt1===capt2)
    { 
       alert("");
     return true;
    }
    else{ 
       alert("Kindly Enter Correct Captcha");
       window.location.href='admin_login.php';
     return false;
     }
    }
    

</script>                    
</body>
</html>
