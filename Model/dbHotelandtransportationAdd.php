<?php 

 

include "DbConnect.php";

 

function hotelandtransportationadd($hpref , $rpref , $rcin ,$rcout, $tpref,$ttime )
{
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO hotelandtransportation(hpref , rpref , rcin ,rcout, tpref,ttime) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$hpref , $rpref , $rcin ,$rcout, $tpref, $ttime);

 

    return $stmt->execute();
}

 

?>