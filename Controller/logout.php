
   
<?php


session_start();


if (isset($_SESSION['userName'])) {

session_unset();
session_destroy();


header("location: customerlogin.php");


}


else{


header("location:customerlogin.php");


}


?>

