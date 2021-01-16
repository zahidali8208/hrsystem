<?php
    include('../../../config/config.php"');
    // if(isset($_POST['provinceName'])){
      $srNO=$_POST['srNO'];
      $allowanceID=$_POST['allowanceID'];
      $allowanceRate=$_POST['allowanceRate'];
      $allowanceStatus=$_POST['allowanceStatus']; 
      $qry = "INSERT INTO emppersonalallowance(srNO,allowanceID,allowanceRate,allowanceStatus) VALUES ('$srNO','$allowanceID','$allowanceRate','$allowanceStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/emp/personalAllowace");
      }
      
    // }
 

?>