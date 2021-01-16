<?php

include('../../config/config.php"');
 $eligibilitiesID = $_GET["eligibilitiesID"];
$sql= "DELETE FROM tbleligibilities WHERE eligibilitiesID={$eligibilitiesID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/eligibility/");
}



?>