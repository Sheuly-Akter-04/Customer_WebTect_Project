<?php
  
include "DbConnect.php";

 

    function updateProfile($fname , $lname , $dob , $gender, $nationality  , $phone ,$email ,$paddress ,$peraddress , $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE customersignup SET fname = ?, lname= ?, dob= ?, gender= ?, nationality= ?, phone= ?,email= ?,paddress= ?,peraddress= ? WHERE username = ? ");
    $stmt->bind_param("ssssssssss",$fname , $lname , $dob , $gender, $nationality , $phone ,$email ,$paddress ,$peraddress , $username);
     return $stmt->execute();
    }
?>