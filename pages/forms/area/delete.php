<?php

include('../../config/config.php"');
 $areaID = $_GET["areaID"];
$sql= "DELETE FROM tblarea WHERE areaID={$areaID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/area/");
}



?>