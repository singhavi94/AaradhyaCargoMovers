<?php
include_once 'add_courier_database.php';
if(isset($_POST['btn-save']))
{
// variables for input data

$name = $_POST['name'];
$password = $_POST['password'];


// sql query for inserting data into database

mysqli_query($conn,"insert into admin_login(name,password) values ('$name','$password')") or die(mysqli_error());
header('Location: http://localhost/A%20Aaradhya%20Cargo%20Movers/admin_dashboard.php');;
}
?> 