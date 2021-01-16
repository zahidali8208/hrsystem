<?php

include('../../config/config.php"');
      $eligibilitiesID=$_POST['eligibilitiesID'];
      $eligibilitiesDescription=$_POST['eligibilitiesDescription']; 
      $eligibilitiesStatus=$_POST['eligibilitiesStatus']; 
      $qry = "UPDATE tbleligibilities SET eligibilitiesDescription ='{$eligibilitiesDescription}',eligibilitiesStatus='{$eligibilitiesStatus}' WHERE eligibilitiesID='{$eligibilitiesID}' "; 
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/eligibility/");
      }

?>