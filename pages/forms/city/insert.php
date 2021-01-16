<?php
    include('../../config/config.php"');
    // if(isset($_POST['provinceName'])){
    echo $cityName=$_POST['cityName'];
    echo $provinceID=$_POST['provinceID']; 
    echo $cityStatus=$_POST['cityStatus']; 
      $qry = "INSERT INTO tblcity(cityName,provinceID,cityStatus) VALUES ('$cityName','$provinceID','$cityStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/city/");
      }
      
    // }
 

?>