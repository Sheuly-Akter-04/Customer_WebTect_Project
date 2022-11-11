<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CUSTOMER SIGN UP</title>
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">
  <script src="../View/js/customersignup.js"></script>

  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../View/js/customersignup.js"></script>
    <link rel="stylesheet" href="../View/css/customersignup.css">

</head>

  <body  >

 <?php
    
    include "../Model/dbSignupAdd.php";
        
   $fname = $lname = $dob = $gender = $nationality = $password = $username = $phone = $email = $paddress=$peraddress =$websitelink=" ";
   $fnameErr = $lnameErr = $dobErr = $genderErr=$passwordErr = $usernameErr = $phoneErr = $emailErr =$paddressErr =$peraddressErr  =$websitelinkErr =" ";
  $flag = false;
$successfulMessage = $errorMessage = "";
 

    if($_SERVER['REQUEST_METHOD'] == "POST") 
{

 

  if(empty($_POST["fname"])) 
   {
      $fnameErr = "Please do not keep field empty";
      $flag = true;
   }
  if(empty($_POST["lname"])) 
   {
      $lnameErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["dob"])) 
   {
      $dobErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["gender"])) 
   {
      $genderErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["nationality"])) 
   {
      $nationalityErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["password"])) 
   {
      $passwordErr = "Please do not keep field empty";
      $flag = true;
   }
    if(empty($_POST["username"])) 
   {
      $usernameErr = "Please do not keep field empty";
      $flag = true;
   }
    if(empty($_POST["phone"])) 
   {
      $phoneErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["email"])) 
   {
      $emailErr = "Please do not keep field empty";
      $flag = true;
   }
    if(empty($_POST["paddress"])) 
   {
      $paddressErr = "Please do not keep field empty";
      $flag = true;
   }
    if(empty($_POST["peraddress"])) 
   {
      $peraddressErr = "Please do not keep field empty";
      $flag = true;
   }

    if(empty($_POST["websitelink"])) 
   {
      $websitelinkErr = "Please do not keep field empty";
      $flag = true;
   }
 
  if(!$flag) 
    {
      $fname = test_input($_POST["fname"]);
      $lname = test_input($_POST["lname"]);
      $dob = test_input($_POST["dob"]);
      $gender = test_input($_POST["gender"]);
      $nationality = test_input($_POST["nationality"]);
      $phone = test_input($_POST["phone"]);
      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
      $email = test_input($_POST["email"]);
      $paddress = test_input($_POST["paddress"]);
      $peraddress = test_input($_POST["peraddress"]);
      $websitelink = test_input($_POST["websitelink"]);

 
    $res = signup($fname , $lname , $dob ,$gender, $nationality,$password,$username, $phone,$email,$paddress,$peraddress,$websitelink);
       if($res) {
         $successfulMessage = "Successfully saved";
         header("Location: customerlogin.php");
       }
       else {
          $errorMessage = "Error while saving!";
       }
     

    }

}    

 function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


?>


<h1>Regisration From</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "reg" onsubmit="return isValid()";>

<fieldset>
   <legend class="form">Form:</legend>
<label for="fname">First Name:</label> <span>*</span>
<input type="text" id="fname" name="fname">
<span id="fnameErr" style="color:red;"></span>
<span><?php echo $fnameErr; ?></span>
<br></br>
<label for="lname">Last Name:</label> <span>*</span>
<input type="text" id="lname" name="lname">
<span id="lnameErr" style="color:red;"></span>
<span><?php echo $lnameErr ?></span>
<br></br>
<label for="dob"> Date of birth:</label> <span class="star">*</span>
<input type="date" id="dob" name="dob">
<br></br>


<label for="gender">Gender:</label>
<input type="radio"  name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<br></br>

<label for="nationality">Nationality:</label>
<select id="nationality" name="nationality">
   <option value="CHOOSE">Chosse</option>
   <option value="Bangladesh">Bangladeshi</option>
   <option value="India">Indian</option>
   <option value="Pakistan">Pakistani</option>
   <option value="China">Nepali</option>
   <option value="China">Britis</option>
   <option value="China">American</option>
   <option value="China">Canadian</option>
   <option value="China">Garmam</option>
</select> 
<br></br>


<label for="password">Password:</label><span >*</span>
<input type="password" id="password" name="password" pattern="{8,}+">
<span id="passwordErr" style="color:red;"></span>
<span style="color: red"><?php echo $passwordErr; ?></span>
<br></br>

<label for="username">Username:</label> <span >*</span>
<input type="text" id="username" name="username">
<span id="usernameErr" style="color:red;"></span>
<span style="color: red"><?php echo $usernameErr; ?></span>
<br></br>

<label for="phone">Phone Number:</label> <span  >*</span>
<input type="tel" id="phone" name="phone" max="13">
<span id="phoneErr" style="color:red;"></span>
<span ><?php echo $phoneErr; ?></span>
<br></br>


<label for="email">Email:</label><span>*</span>
<input type="email" id="email" name="email"><span>
  <span id="emailErr" style="color:red;"></span>
  <?php echo $emailErr; ?></span><br><br>

  
  <label for="paddress">Present Address:</label> <span>*</span>
<input type="text" id="paddress" name="paddress"><span>
  <span id="paddressErr" style="color:red;"></span>
  <?php echo $paddressErr; ?></span>
<br></br>
<label for="peraddress">Permanent Address:</label> <span>*</span>
<input type="text" id="peraddress" name="peraddress">
<span id="peraddressErr" style="color:red;"></span>
<span><?php echo $peraddressErr ?></span>
<br></br>

<label for="websitelink">Website link:</label> <span >*</span>
<input type="text" id="websitelink" name="websitelink">
<span id="websitelinkErr" style="color:red;"></span>
<span style="color: red"><?php echo $websitelinkErr; ?></span>
<br></br>

</fieldset>
      <button class= " btn btn-outline-info">Submit</button>

 <a href="customerlogin.php">,<p style = "text-align: right;">Go Back</p></a>
<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>
</form>




</body>
  </html>