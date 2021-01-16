<?php

include('../../config/config.php"');
      $provinceID=$_POST['provinceID'];
      $provinceName=$_POST['provinceName'];
      $provinceStatus=$_POST['provinceStatus']; 
      $qry = "UPDATE tblprovince SET provinceName ='{$provinceName}', provinceStatus='{$provinceStatus}' WHERE provinceID='{$provinceID}' "; 
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/province/");
      }

?>