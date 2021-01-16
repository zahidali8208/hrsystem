<?php

include('../../config/config.php"');
      $designationID=$_POST['designationID'];
      $designationName=$_POST['designationName']; 
      $designationStatus=$_POST['designationStatus']; 
      $qry = "UPDATE tbldesignation SET designationName ='{$designationName}',designationStatus='{$designationStatus}' WHERE designationID='{$designationID}' "; 
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/designation/");
      }

?>