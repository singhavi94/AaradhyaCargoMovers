<?php
include_once 'add_courier_database.php';
if(isset($_POST['btn-save']))
{
// variables for input data



$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];



// sql query for inserting data into database

mysqli_query($conn,"insert into admin_profile(name,phone,email,address) values ('$name','$phone','$email','$address')") or die(mysqli_error());
header('Location: http://localhost/A%20Aaradhya%20Cargo%20Movers/admin_dashboard.php');
}
?> 