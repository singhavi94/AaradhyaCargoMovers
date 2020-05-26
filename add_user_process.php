<?php
include_once 'add_courier_database.php';
if(isset($_POST['btn-save']))
{
// variables for input data

$captcha = $_POST['captcha'];

$sname = $_POST['sname'];
$smobile = $_POST['smobile'];
$semail = $_POST['semail'];
$saddress = $_POST['saddress'];
$tofpkts = $_POST['tofpkts'];
$actualwt = $_POST['actualwt'];
$date = $_POST['date'];
$rname = $_POST['rname'];
$rmobile = $_POST['rmobile'];
$remail = $_POST['remail'];
$raddress = $_POST['raddress'];
$cost = $_POST['cost'];
$nofpkts = $_POST['nofpkts'];
$chargewt = $_POST['chargewt'];
$descri = $_POST['descri'];

// sql query for inserting data into database

mysqli_query($conn,"insert into myusers(captcha,sname,smobile,semail,saddress,tofpkts,actualwt,date,rname,rmobile,remail,raddress,cost,nofpkts,chargewt,descri) values ('$captcha','$sname','$smobile','$semail','$saddress','$tofpkts','$actualwt','$date','$rname','$rmobile','$remail','$raddress','$cost','$nofpkts','$chargewt','$descri')") or die(mysqli_error());

echo '<div class="alert alert-danger alert-dismissible" style="color:#2C37A0;font-weight:bold;font-family:Arial;text-align:center; border-radius:0px;margin-top: 10%;padding: 20px;">
	
	<h1>Courier Added Successfully.</h3>
	<h4>Aaradhya Cargo Movers</h4></div>';
echo '<script>
				
				setTimeout(function(){ window.location.href="http://localhost/A%20Aaradhya%20Cargo%20Movers/add_courier_dash.php"; }, 3000);

</script>';
}
?> 