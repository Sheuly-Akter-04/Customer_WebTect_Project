

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
   <link rel="stylesheet" type="text/css" href="../View/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/bootstrap-grid.min.css">

  <script type="text/javascript" src="../View/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../View/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../View/js/customerlogin.js"></script>
    <link rel="stylesheet" href="../View/css/customerlogin.css">

</head>
 <body >

 	<?php 

 include  "../Model/dbLogin.php";
$usernameErr = $passwordErr = "";
$login = "";
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 


if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    } 

if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    } 
 
 
if(!$flag) 
    {
        $username = input_data($_POST['username']);
        $password = input_data($_POST['password']);

 

        $res = login($username,$password);
        if ($res)
        {
            setcookie("username",$username,time() + 60*60*24);
            session_start();
            $_SESSION['username'] = $username;
            header("Location: customerhome.php");
        }
        else
        {
           echo "Username/password is incorect";
        }

 

}
}
  function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }



?>

		<h1>LOGIN </h1>


   
	<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		 <fieldset >
<label for="username">User Name:</label>
			<input type="text" name="username" id="username" >
			<span><?php echo $usernameErr; ?> </span><br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span><?php echo $passwordErr; ?> </span><br><br>

            <input type="checkbox" name="checkRemember">Remember Me
               <br><br>

      <button class= " btn btn-outline-info">Login</button>
      <br><br>

    <a href="customersignup.php">Sign up To open Account.</a>
	</fieldset>

        <a href="../index.php">,<p style = "text-align: right;">Go Back</p></a>
	</form>



</body>
</html>
?>