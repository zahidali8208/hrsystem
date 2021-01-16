<?php

include('../../../config/config.php"');
     echo $employeeID=$_POST['employeeID'];
      $srNO=$_POST['srNO'];
      $allowanceID=$_POST['allowanceID'];
      $allowanceRate=$_POST['allowanceRate'];
      $allowanceStatus=$_POST['allowanceStatus'];
      $qry ="UPDATE `emppersonalallowance` SET `srNO`=$srNO,`allowanceID`=$allowanceID,`allowanceRate`=$allowanceRate,`allowanceStatus`=$allowanceStatus WHERE `employeeID`=$employeeID";
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/emp/personalAllowace");
      }

?>