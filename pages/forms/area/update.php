<?php

include('../../config/config.php"');
      $areaID=$_POST['areaID'];
      $areaName=$_POST['areaName'];
      $machineExist=$_POST['machineExist'];
      $areaStatus=$_POST['areaStatus']; 
      $qry = "UPDATE tblarea SET areaName ='{$areaName}', machineExist='{$machineExist}',areaStatus='{$areaStatus}' WHERE areaID='{$areaID}' "; 
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/area/");
      }

?>