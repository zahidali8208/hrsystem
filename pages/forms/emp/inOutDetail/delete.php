<?php

include('../../../config/config.php"');
 $employeeID = $_GET["employeeID"];
$sql= "DELETE FROM emppersonalallowance WHERE employeeID={$employeeID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/emp/personalAllowace");
}



?>