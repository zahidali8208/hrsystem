<?php
    include('../../config/config.php"');
    // if(isset($_POST['provinceName'])){
      $eligibilitiesDescription=$_POST['eligibilitiesDescription'];
      $eligibilitiesStatus=$_POST['eligibilitiesStatus']; 
      $qry = "INSERT INTO tbleligibilities(eligibilitiesDescription,eligibilitiesStatus) VALUES ('$eligibilitiesDescription','$eligibilitiesStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/eligibility/");
      }
      
    // }
 

?>