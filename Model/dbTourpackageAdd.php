<?php 

 

include "DbConnect.php";

 

function tourpackage($selecting )
{
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO tourpackageadd(selecting ) VALUES(?)");
    $stmt->bind_param("s",$selecting);

 

    return $stmt->execute();
}

 

?>