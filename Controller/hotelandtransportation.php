<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOTEL & TRANSPORTATION</title>
	<link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">

  <script type="text/javascript" src="../View/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../View/js/hotelandtransportation.js"></script>
    <link rel="stylesheet" href="../View/css/hotelandtransportation.css">
</head>
<body >


	
	<?php

    include "../Model/dbHotelandtransportationAdd.php";
	
	
	$hpref = $rpref = $rcin = $rcout = $tpref = $ttime = "";

$hprefErr = $rprefErr = $rcinErr = $rchprefoutErr = $tprefErr = $ttimeErr  = "";
$flag = false;
$successfulMessage = $errorMessage = "";
 

if ($_SERVER['REQUEST_METHOD']==="POST") 
{

	
//Validating
	if(empty($_POST['hpref']))
	{
		$hprefErr = "Field Can't be empty";
		$flag = true;
	}

	if(empty($_POST['rpref']))
	{
		$rprefErr = "Field Can't be empty";
		$flag = true;
	}

	if(empty($_POST['rcin']))
	{
		$rcinErr = "Field Can't be empty";
		$flag = true;
	}

	if(empty($_POST['rcout']))
	{
		$rcoutErr = "Field Can't be empty";
		$flag = true;
	}

	if(empty($_POST['tpref']))
	{
		$tprefErr = "Field Can't be empty";
		$flag = true;
	}

	if(empty($_POST['ttime']))
	{
		$ttimeErr = "Field Can't be empty";
		$flag = true;
	}




	if(!$flag) 
    {
      $hpref = test_input($_POST["hpref"]);
      $rpref = test_input($_POST["rpref"]);
      $rcin = test_input($_POST["rcin"]);
      $rcout = test_input($_POST["rcout"]);
      $tpref = test_input($_POST["tpref"]);
      $ttime = test_input($_POST["ttime"]);
      
   $res = hotelandtransportationadd($hpref , $rpref , $rcin ,$rcout, $tpref, $ttime);
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


	<h1><u>Hotel & Transportation</u></h1>
	<br>

	

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "reg" onsubmit="return isValid()";>
		
		<fieldset>
			


  
	

     <span >*</span>
	<label for="hpref">Hotel Preference:</label>
	<select id="hpref" name="hpref">

		<option value="5 Star">5 Star</option>
		<option value="4 Star">4 Star</option>
		<option value="3 star">3 star</option>
	</select> <span style="color: red"> <?php echo $hprefErr; ?></span> <br><br>


     <span >*</span>
	<label for="rpref">Room Preference:</label>
	<select id="rpref" name="rpref">

		<option value="Suite">Suite</option>
		<option value="Presidential Suite">Presidential Suite</option>
		<option value="Famliy Room">Famliy Room</option>
	</select> <span > <?php echo $rprefErr; ?></span><br><br>


   <span >*</span>
			<label for="rcin">CheckIn Date : </label>
			<input type="date" name="rcin">
			<span style="color: red;"> <?php echo $rcinErr; ?> </span><br><br>

			<span >*</span>
			<label for="rcout">CheckOut Date: </label>
			<input type="date" name="rcout"><br><br>

		


     <span>*</span>
	<label for="tpref">Transport Preference:</label>
	<select id="tpref" name="tpref">

		<option value="Economy">Economy</option>
		<option value="VIP">VIP</option>
		<option value="BUS">BUS</option>
		<option value="COMFORT">COMFORT</option>
		<option value="SUV">SUV</option>
		<option value="BUSINESS">BUSINESS</option>
	</select> <span > <?php echo $tprefErr; ?></span><br><br>


     <span >*</span>
	<label for="ttime">Hotel Preference:</label>
	<select id="ttime" name="ttime">

		<option value="HALFTIME">HALF-TIME</option>
		<option value="FULLTIME">FULL-TIME</option>
	
	</select> <span > <?php echo $ttimeErr; ?></span><br><br>


		</fieldset><br>

<button>Register</button>
<a href="customerhome.php">,<p style = "text-align: right;">Go Back</p></a>
<br><br>
	

</body>
</html>