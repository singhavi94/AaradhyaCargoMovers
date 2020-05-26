<?php
include_once 'add_courier_database.php';
if(isset($_POST['btn-save']))
{
// variables for input data

$cname = $_POST['cname'];
$cemail = $_POST['cemail'];
$cphone = $_POST['cphone'];
$ccoment = $_POST['ccoment'];
$cdate=  date("Y/m/d");// $_POST['cdate'];
$cip= $_POST['cip'];





// sql query for inserting data into database

mysqli_query($conn,"insert into usercoment(cname,cemail,cphone,ccoment,cdate,cip) values ('$cname','$cemail','$cphone','$ccoment','$cdate','$cip')") or die(mysqli_error());
echo '<div class="alert alert-danger alert-dismissible" style="color:#2C37A0;font-weight:bold;font-family:Arial;text-align:center; border-radius:0px;margin-top: 10%;padding: 20px;">
	
	<h1>Thank you !</h1><h3>We appreciate the feedback. Your opinion means the world to us.</h3>
	<h4>Aaradhya Cargo Movers</h4></div>';
echo '<script>
				
				setTimeout(function(){ window.location.href="http://localhost/A%20Aaradhya%20Cargo%20Movers/index.html"; }, 3000);

</script>';
}
// Function to get the client IP address

?> 