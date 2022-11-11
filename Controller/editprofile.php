<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">

  <script src="../View/js/editprofile.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../View/css/editprofile.css">

</head>
<body >
    <?php

include "../Model/dbEditpofile.php";

$fnameErr = $lnameErr = $genderErr = $dobErr = $nationalityErr = $paddressErr = $peraddressErr  =$phoneErr = $emailErr = "";  
$fname = $lname = $gender = $dob = $nationality = $paddress = $peraddress  =$phone = $email = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  


    if (empty($_POST["fname"])) 
    {  
        $fnameErr = " first Name is required"; 
        $flag = True;
    } 
  
    
    if (empty($_POST["lname"])) 
    {  
        $lnameErr = " Last Name is required";
        $flag = True;  
    } 
     
  
    if (empty($_POST["gender"])) 
    {  
        $genderErr = " Gender is required";
        $flag = True;  
    } 
      

    if (empty($_POST["dob"])) 
    {  
        $dobErr = " Date of birth is required";
        $flag = True;  
    }  

    if (empty($_POST["nationality"])) 
    {  
        $nationalityErr = " Nationality is required";
        $flag = True;  
    } 
    if (empty($_POST["paddress"])) 
    {  
        $paddressErr = " Present Address is required";
        $flag = True;  
    } 
        if (empty($_POST["peraddress"])) 
    {  
        $peraddressErr = " Permanent Address is required";
        $flag = True;  
    } 
        if (empty($_POST["phone"])) 
    {  
        $phoneErr = " Phone number is required";
        $flag = True;  
    } 

    if (empty($_POST["email"])) 
    {  
       $emailErr = " Email is required";
       $flag = True;  
    } 


  if(!$flag) 
    {
      $fname = test_input($_POST["fname"]);
      $lname = test_input($_POST["lname"]);
      $dob = test_input($_POST["dob"]);
      $gender = test_input($_POST["gender"]);
      $nationality = test_input($_POST["nationality"]);
      $phone = test_input($_POST["phone"]);
      $email = test_input($_POST["email"]);
      $paddress = test_input($_POST["paddress"]);
      $peraddress = test_input($_POST["peraddress"]);


 


  
    $un = "";
    if(isset($_COOKIE['uname'])) {
    $un = $_COOKIE['uname'];
    }

 
    $res = updateProfile($fname , $lname , $dob , $gender, $nationality , $phone ,$email ,$paddress ,$peraddress ,$un);
     if($res)
     {
      $successfulMessage = "Successfully updated";
     }
     else
     {
      $errorMessage = "Failed to update!";
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
<h1>Profile Edit</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "profile" onsubmit="return isValid()";>
  <fieldset>
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"> 
    <span id="fnameErr" style="color:red;"></span>
    <span ><?php echo $fnameErr; ?> </span> <br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"> 
    <span id="lnameErr" style="color:red;"></span>
    <span ><?php echo $lnameErr; ?> </span><br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?>value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">
    <label for="Female">Female</label>
    <span id="genderErr" style="color:red;"></span>
    <span><?php echo $genderErr; ?> </span><br><br>
    <label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span id="dobErr" style="color:red;"></span>
    <span ><?php echo "&nbsp;&nbsp;".$dobErr; ?> </span><br><br>
    <label for="nationality">Nationality:</label>
    <select name="nationality" id="nationality">
    <option  value="Choose">Choose</option>
    <option value="Bangladeshi">Bangladeshi</option>
    <option value="Indian">Indian</option>
    <option value="Pakistani">Pakistani</option>
    <option value="Nepali">Nepali</option>
    </select>
    <span id="nationalityErr" style="color:red;"></span>
    <span><?php echo $nationalityErr; ?> </span><br><br>

    <label for="paddress">Present Address:</label>
    <textarea name="paddress" rows="3" cols="30"></textarea>
    <span id= "paddressErr" style="color:red;"></span>
    <span ><?php echo $paddressErr; ?> </span> <br><br>
    <label for="peraddress">Permanent Address:</label>
    <textarea name="peraddress" rows="3" cols="30"></textarea>
    <span id="peraddressErr" style="color:red;"></span>
    <span ><?php echo $peraddressErr; ?> </span> <br><br>
    <label for="phone">Phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <span id="phoneErr" style="color:red;"></span>
    <span><?php echo $phoneErr; ?> </span> <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <span id="emailErr" style="color:red;"></span>
    <span><?php echo $emailErr; ?> </span><br><br>
  </fieldset>
  <br>
  <div >
 
<button>Change</button>
<br>
  <a href="customerhome.php">,<p style = "text-align: right;">Go Back</p></a>
</div>
</form>
 <br>

 <span class="success"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span class="error"><?php echo "<b>".$errorMessage."</b>"; ?></span>


</body>
</html>