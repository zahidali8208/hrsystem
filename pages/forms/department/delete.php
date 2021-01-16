<?php

include('../../config/config.php"');
 $departmentID = $_GET["departmentID"];
$sql= "DELETE FROM tbldepartment WHERE departmentID={$departmentID} ";
$result = mysqli_query($conn,$sql)or die("Error");
if(!$result){
    echo "Record NOt Delete";
}else{
    header("Location:{$hostName}/forms/department/");
}



?>