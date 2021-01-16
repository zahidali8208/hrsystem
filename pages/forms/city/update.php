<?php

include('../../config/config.php"');
     echo $cityID=$_POST['cityID'];
     echo $cityName=$_POST['cityName'];
     echo $provinceID=$_POST['provinceID'];
     echo $cityStatus=$_POST['cityStatus']; 
      $qry = "UPDATE tblcity SET cityName ='{$cityName}',provinceID='{$provinceID}', cityStatus='{$cityStatus}' WHERE cityID='{$cityID}' "; 
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/city/");
      }

?>