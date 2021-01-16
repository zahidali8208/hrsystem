<?php

include('../../config/config.php"');
 $designationID = $_GET["designationID"];
$sql= "DELETE FROM tbldesignation WHERE designationID={$designationID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/designation/");
}



?>