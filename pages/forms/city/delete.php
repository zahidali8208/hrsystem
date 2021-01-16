<?php

include('../../config/config.php"');
 $cityID = $_GET["cityID"];
$sql= "DELETE FROM tblcity WHERE cityID={$cityID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/city/");
}



?>