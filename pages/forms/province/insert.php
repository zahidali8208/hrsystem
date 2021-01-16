<?php
    include('../../config/config.php"');
    // if(isset($_POST['provinceName'])){
      $provinceName=$_POST['provinceName'];
      $provinceStatus=$_POST['provinceStatus']; 
      $qry = "INSERT INTO tblprovince(provinceName,provinceStatus) VALUES ('$provinceName','$provinceStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/province/");
      }
      
    // }
 

?>