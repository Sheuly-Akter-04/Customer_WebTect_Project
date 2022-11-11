<!DOCTYPE html>
<html>
<head>
<title>Change Password </title>
</head>
 <link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">

  <script type="text/javascript" src="../View/css/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/css/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../View/css/changepassword.css">
      <script src="../View/css/changepassword.js"></script>
<body >

<?php

include'../Model/dbPasswordchange.php';

define("filepath", "../registration.json");

$passwordErr = $passwordoErr = $passwordrErr  = "";  
$password = $passwordo = $passwordr = ""; 
$passE = ""; 
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["passwordo"])) 
    {  
        $passwordoErr = " Field dosen't be empty "; 
        $flag = True;
    } 
  
      if (empty($_POST["password"])) 
    {  
        $passwordErr = " Field dosen't be empty "; 
        $flag = True;
    } 
    
    if (empty($_POST["passwordr"])) 
    {  
        $passwordrErr = " Field dosen't be empty ";
        $flag = True;  
    } 
     

    if(!$flag) 
    {
      $passwordo = input_data($_POST["passwordo"]);
      $password = input_data($_POST["password"]);
      $passwordr = input_data($_POST["passwordr"]);

    if ($password == $passwordr)
    {

            $un = "";
    if(isset($_COOKIE['uname'])) {
    $un = $_COOKIE['uname'];
    }
    $res = pass($password, $un, $passwordo);
        if($res) {
        $successfulMessage = "Successfully done....";
        }
        else {
        $errorMessage = "Error while saving.";
        }
  }
  else
  {
       $passE = "Password mismatch";
  }
 }
}


  
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
?>
<h1>Change Password</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
 <fieldset>
 <label for="password">Enter Current Password:<span>*</span></label>
 <input type="password" id="passwordo" name="passwordo">
 <span style="color: red"><?php echo $passwordoErr; ?> </span><br><br>
 <label for="password">Enter Renewed Password:<span>*</span></label>
 <input type="password" id="password" name="password">
 <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
 <label for="passwordr">Re-enter Renewed Password:<span>*</span></label>
 <input type="password" id="passwordr" name="passwordr">
 <span style="color: red"><?php echo $passwordrErr; ?> </span><br>
 </fieldset>
 <br><br> 
      <button class= " btn btn-outline-info">Submit</button>
    <a href="customerlogin.php">,<p style = "text-align: right;">Go Back</p></a>  
 </form>
 <br>
 
<span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>
<span style="color: red"><?php echo $passE; ?> </span><br>

 <?php
function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
            }
  fclose($file);
   return $fr;
   }
?>
  <?php include'../footer.php'?>
</body>
</html>