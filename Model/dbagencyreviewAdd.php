<?php

 

    include "DbConnect.php";
    
    function agencyreviewadd($sherereview, $rating)
    {
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO agencyreviewadd(sherereview, rating) VALUES(?,?)");
    $stmt->bind_param("ss",$sherereview,$rating);
   
    
    return $stmt->execute();
    }
?>