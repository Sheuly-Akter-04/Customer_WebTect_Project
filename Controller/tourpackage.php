
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tour Package:</title>
</head>
  <body >
<link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">

  <script type="text/javascript" src="../View/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../View/js/tourpackage.js"></script>
      <link rel="stylesheet" href="../View/css/tourpackage.css">


   
  <?php

    include "../Model/dbTourpackageAdd.php";
   
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

      
     $res = tourpackage($selecting);
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

  <h1>Tour Package</h1>

   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "add" onsubmit="return isValid()";>

      <legend>Details:</legend><br>
       <div class="card-group">
            <div class="card col-md-3">
      <div class="card-body">
  <h2>Premium Package</h2>
  <p class="price">BDT 60,000</p>
    <h4>10 Days</h4>
     <p class="free">Free Buffet</p>
      <span>For 1 person</span><br><br>

      </div>
    </div> 
  <br><br>
            <div class="card col-md-3">
      <div class="card-body">
 <h2>Exclusive Package</h2>
  <p class="price">BDT 80,000</p>
    <h4>12 Days</h4>
      <p class="free">Free Buffet</p>
      <span>For 1 person</span><br><br>

      </div>
    </div> 
  <br><br>

   <div class="card col-md-3">
      <div class="card-body">
<h2>Deluxe Package</h2>
  <p class="price">BDT 1,50,000</p>
    <h4>20 Days</h4>
    <p class="free">Free Buffet</p>
      <span>For 1 person</span>
       <p>Outdoor Pool</p>
      </div>
    </div> 
<br>
  <br><br>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "reg" onsubmit="return isValid()";>
 </fieldset>

<label for="selecting">select:</label> <span>*</span>
<input type="text" id="selecting" name="selecting">
<span id="selectingErr" style="color:red;"></span>
<span><?php echo $selectingErr; ?></span>
<br></br>
      
<button>Submit</button><br>

   
  </form>

  <br>
  <a href="customerhome.php">,<p style = "text-align: right;">Go Back</p></a>
<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>

</body>
</html>