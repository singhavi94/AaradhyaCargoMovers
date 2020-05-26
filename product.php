<?php
session_start();
if(isset($_SESSION['uname'])){
	echo "<h2>Welcome to Product Page</h2>";
echo "<br><a href='welcome.php'<input type='button name='back' value='Back'></a>";
}
else
{
	echo "<script> location.href='login.php'</script>";
}
?>