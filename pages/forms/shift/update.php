<?php

include('../../config/config.php"');
     echo $shiftID=$_POST['shiftID'];
     echo $shiftStartTime=$_POST['shiftStartTime']; 
     echo $shiftStopTime=$_POST['shiftStopTime']; 
     echo $shiftStatus=$_POST['shiftStatus']; 
      $qry = "UPDATE tblshift SET shiftStartTime ='{$shiftStartTime}',shiftStopTime='{$shiftStopTime}',shiftStatus='{$shiftStatus}' WHERE shiftID='{$shiftID}' "; 
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/shift/");
      }

?>