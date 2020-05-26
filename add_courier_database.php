
<?php 

                      $host = "localhost:3336";
                      $dbusername = "root";
                      $dbpassword = "";
                      $dbname = "addcourier";
                      $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
                if (mysqli_connect_error()) 
                {
                  die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
                }
                
?>


  

 
