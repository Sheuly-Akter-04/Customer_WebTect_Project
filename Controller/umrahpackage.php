
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Umrah Package:</title>
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">
   <link rel="stylesheet" href="../View/css/umrahpackage.css">

  <script type="text/javascript" src="../View/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../View/js/umrahpackage.js"></script>
</head>
  <body>

<?php

include "../Model/dbUmrahpackageAdd.php";
   
   $selecting=" ";
  $selectingErr=" ";
   $flag = false;
   $successfulMessage = "";
   $errorMessage = "";
   

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

  
     if(empty($_POST["selecting"])) 
   {
      $selectingErr = "Please do not keep field empty";
      $flag = true;
   }
  
 
  if(!$flag) 
    {
      $selecting = test_input($_POST["selecting"]);

      
     $res = umrahpackage($selecting);
       if($res) {
         $successfulMessage = "Successfully saved";
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

  <h1>Umrah Package Details:</h1>

 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "add" onsubmit="return isValid()";>

    <fieldset class="bootstrap">
       <div class="card-group">
            <div class="card col-md-3">
      <div class="card-body">
   <h2>1. 6 night Budget Friendly Package</h2>
  <p class="price">BDT 50,000</p>
  <p><label for="Properties">Properties :</label><br>
    <h6>6 Days Stay At both Makkah and Madina</h6>
      <p>3 Star Hotel</p>
      <p class="free">Free Transport</p>
      <span>For 1 person</span><br><br>
  </div>
  </div> 
  <br><br>

  <div class="card col-md-3">
  <div class="card-body">
  <h2>2.Economy Umrah Package</h2>
  <p class="price">BDT 70,000</p>
  <p><label for="Properties">Properties :</label><br>
    <h6>10 Days Stay At both Makkah and Madina</h6>
      <p>3 Star Hotel</p>
      <p class="free">Free Transport</p>
      <p>Open Buffet</p>
      <span>For 1 person</span><br><br>
  
  </div>
  </div> 
  <br><br>

  <div class="card col-md-3">
  <div class="card-body">
  <h2>3.Premium Umrah Package</h2>
  <p class="price">BDT 1,00,000</p>
  <p><label for="Properties3">Properties :</label><br>
    <h6>12 Days Stay At both Makkah and Madina</h6>
      <p>5 Star Hotel</p>
      <p class="free">Free Transport</p>
      <p>Open Buffet</p>
      <span>For 1 person</span><br><br>

  
      </div>
    </div> 
  <br><br>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "reg" onsubmit="return isValid()";>
 </fieldset>

<label for="selecting">select:</label> <span>*</span>
<input type="text" id="selecting" name="selecting">
<span id="selectingErr" style="color:red;"></span>
<span><?php echo $selectingErr; ?></span>
<br></br>
      
<button>Submit</button><br>
<br>
  <a href="../Controller/customerhome.php">,<p style = "text-align: right;">Go Back</p></a>
   
  </form>

  
<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>

</body>
</html>