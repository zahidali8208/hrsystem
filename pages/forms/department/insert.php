<?php
    include('../../config/config.php"');
    // if(isset($_POST['provinceName'])){
      $departmentName=$_POST['departmentName'];
      $departmentStatus=$_POST['departmentStatus']; 
      $qry = "INSERT INTO tbldepartment(departmentName,departmentStatus) VALUES ('$departmentName','$departmentStatus')";    
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/department/");
      }
      
    // }
 

?>