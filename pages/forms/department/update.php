<?php

include('../../config/config.php"');
      $departmentID=$_POST['departmentID'];
      $departmentName=$_POST['departmentName']; 
      $departmentStatus=$_POST['departmentStatus']; 
      $qry = "UPDATE tbldepartment SET departmentName ='{$departmentName}',departmentStatus='{$departmentStatus}' WHERE departmentID='{$departmentID}' "; 
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/department/");
      }

?>