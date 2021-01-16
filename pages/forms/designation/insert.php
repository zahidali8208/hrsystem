<?php
    include('../../config/config.php"');
    // if(isset($_POST['provinceName'])){
      $designationName=$_POST['designationName'];
      $designationStatus=$_POST['designationStatus']; 
      $qry = "INSERT INTO tbldesignation(designationName,designationStatus) VALUES ('$designationName','$designationStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/designation/");
      }
      
    // }
 

?>