<?php 

 

include "DbConnect.php";

 

function umrahpackage($selecting )
{
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO umrahpackageadd(selecting ) VALUES(?)");
    $stmt->bind_param("s",$selecting);

 

    return $stmt->execute();
}

 

?>