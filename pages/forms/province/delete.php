<?php

include('../../config/config.php"');
 $provinceID = $_GET["provinceID"];
$sql= "DELETE FROM tblprovince WHERE provinceID={$provinceID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/province/");
}



?>