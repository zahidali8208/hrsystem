<?php

include('../../config/config.php"');
 $shiftID = $_GET["shiftID"];
$sql= "DELETE FROM tblshift WHERE shiftID={$shiftID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/shift/");
}



?>