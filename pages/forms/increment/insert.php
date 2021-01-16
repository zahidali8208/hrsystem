<?php
    include('../../config/config.php"');
    // if(isset($_POST['provinceName'])){
      $shiftStartTime=$_POST['shiftStartTime'];
      $shiftStopTime=$_POST['shiftStopTime'];
      $shiftStatus=$_POST['shiftStatus']; 
      $qry = "INSERT INTO tblshift(shiftStartTime,shiftStopTime,shiftStatus) VALUES ('$shiftStartTime','$shiftStopTime','$shiftStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/shift/");
      }
      
    // }
 

?>