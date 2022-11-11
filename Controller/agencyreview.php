
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tour guide Review Form</title>
   <link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">

  <script type="text/javascript" src="../View/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.min.js"></script>
      <script src="../View/js/agencyreview.js"></script>
    <link rel="stylesheet" href="../View/css/agencyreview.css">

</head>

  <body>
    <?php 

    include "../Model/dbagencyreviewAdd.php";

    $sherereviewErr = $ratingErr = "";
    $sherereview = $rating = "";
    $flag = false;
    $successfulMessage = $errorMessage = "";
  

if($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if(empty($_POST["sherereview"])) 
   {
      $sherereviewErr = "Please do not keep field empty";
      $flag = true;
   }
  if(empty($_POST["rating"])) 
   {
      $ratingErr = "Please do not keep field empty";
      $flag = true;
   }
 
  if(!$flag) 
    {
      $sherereview = test_input($_POST["sherereview"]);
      $rating = test_input($_POST["rating"]);


 
    $res = agencyreviewadd($sherereview ,$rating);
     if($res)
     {
      $successfulMessage = "Successfully review";
     }
     else
     {
      $errorMessage = "Failed to review!";
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
    
  <h1> Agency Review Section Form</h1>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "add" onsubmit="return isValid()";>

    <fieldset >
    
      <label  for="sherereview"><h2>Please give review:<span >*</span></h2></label><br>

        <textarea>
     
    </textarea>

      <br><br>

<label for="rating">Performance:</label><span >*</span>
<select id="rating" name="rating">
    <option value="1">Give here</option>
    <option value="2">Excellent</option>
    <option value="3">Very Good </option>
    <option value="4">Good</option>
    <option value="5">Average</option>
    <option value="6">Bad</option>
  </select>
  <br><br>

<button class="btn btn-warning">Submit</button>
<a href="customerhome.php">,<p style = "text-align: right;">Go Back</p></a>
    </fieldset>
  </form>

  <br>


</body>
</html>