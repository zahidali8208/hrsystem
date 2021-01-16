<?php
    include('../../config/config.php"');
    // if(isset($_POST['provinceName'])){
      $areaName=$_POST['areaName'];
      $machineExist=$_POST['machineExist'];
      $areaStatus=$_POST['areaStatus']; 
      $qry = "INSERT INTO tblarea(areaName,machineExist,areaStatus) VALUES ('$areaName','$machineExist','$areaStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/area/");
      }
      
    // }
 

?>