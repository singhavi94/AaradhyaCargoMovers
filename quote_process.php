<?php
include_once 'add_courier_database.php';
if(isset($_POST['btn-save']))
{
// variables for input data
$qname = $_POST['qname'];
$qemail = $_POST['qemail'];
$qphone = $_POST['qphone'];
$fstate = $_POST['fstate'];
$tstate = $_POST['tstate'];
$date = $_POST['date'];
$qcoment = $_POST['qcoment'];



// sql query for inserting data into database

mysqli_query($conn,"insert into quote(qname,qemail,qphone,fstate,tstate,date,qcoment) values ('$qname','$qemail','$qphone','$fstate','$tstate','$date','$qcoment')") or die(mysqli_error());
echo '<div class="alert alert-danger alert-dismissible" style="color:#2C37A0;font-weight:bold;font-family:Acme;text-align:center; border-radius:0px;margin-top: 10%;padding: 20px;letter-spacing:2px;">

	<h1>Congratulations ! Your Response has been saved.</h1><h3>We will get back to you soon.</h3>
	<h4>Aaradhya Cargo Movers</h4></div>';
echo '<script>
				
				setTimeout(function(){ window.location.href="http://localhost/A%20Aaradhya%20Cargo%20Movers/index.html"; }, 3000);

</script>'; 

}
?> 