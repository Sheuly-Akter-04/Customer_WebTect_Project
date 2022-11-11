<?php 

 

include "DbConnect.php";

 

function signup($fname, $lname , $dob , $gender,  $nationality , $password,  $username,  $phone,  $email ,  $paddress,  $peraddress,  $websitelink )
{
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO customersignup(fname, lname , dob , gender,  nationality , password,  username,  phone, email, paddress , peraddress , websitelink ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssssss",$fname, $lname , $dob , $gender,  $nationality , $password,  $username,  $phone, $email , $paddress, $peraddress,$websitelink);

 

    return $stmt->execute();
}

 

?>