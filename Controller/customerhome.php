
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
 <link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">
  <script type="text/javascript" src="../View/css/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/css/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../View/css/customerhome.css">

</head>
<?php  
  if($_SERVER['REQUEST_METHOD'] === "POST") {
    $firstName = $_POST['customerhome'];

    setcookie("customerhome", $customerhome, time() + 60*60*24);

    #header("Location: customerhome.php");
  }
?>

  <body >
    <?php 
    session_start();
    $username = "";
     if(isset($_SESSION['username'])) 
    {
        $username = $_SESSION['username'];
    }
     $username = "";
      if (isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
      }
?>

  <h1> HomePage  <?php echo $username; ?> <?php
   
      $username = strtoupper($username);
      echo "<h2>WELCOME </h2>";
        ?>
 </h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <fieldset >


<span><b>  </b><a href="Editprofile.php">Edit  Profile </a></span><br>

<span><b>  </b><a href="CHANGEPASSWORD.php">Change Password </a></span><br>

<span><b>  </b><a href="TOURPACKAGE.php">Tour Package </a></span><br>

<span ><b>  </b><a href="AGENCYREVIEW.php">Reviews </a></span><br>

<span><b>  </b><a href="LOGOUT.php">Logout </a></span><br>

 



    </fieldset>
  </form>

  <br>
  <?php
   include'../footer.php'
   ?>


</body>
</html>