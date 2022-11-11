 
 <?php

include "../Model/DbConnect.php";


 function pass($password, $username, $passwordo)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE customersignup SET password = ? WHERE username = ? and password = ?");
    $stmt->bind_param("sss",$password, $username, $passwordo);
     return $stmt->execute();
    }
?>