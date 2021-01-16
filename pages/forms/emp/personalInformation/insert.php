<?php
    include('../../../config/config.php"');
    // if(isset($_POST['provinceName'])){
       $employeePersonalID=$_POST['employeePersonalID'];
       $pinCode=$_POST['pinCode'];
       $employeeName=$_POST['employeeName'];
       $fatherName=$_POST['fatherName'];
       $gender=$_POST['gender']; 
       $materialStatus=$_POST['materialStatus']; 
       $children=$_POST['children']; 
       $dependents=$_POST['dependents']; 
       $relegion=$_POST['relegion']; 
       $dateOfBirth=$_POST['dateOfBirth']; 
       $identityMark=$_POST['identityMark']; 
       $bloodGroup=$_POST['bloodGroup']; 
       $cnic=$_POST['cnic'];
       $ntn=$_POST['ntn'];
       $basicQualification=$_POST['basicQualification'];
       $tempAddress=$_POST['tempAddress'];
       $tempCityID=$_POST['tempCityID'];
       $tempPhone1=$_POST['tempPhone1'];
       $tempPhone2=$_POST['tempPhone2'];
       $permanentAddress=$_POST['permanentAddress'];
       $permanentCityID=$_POST['permanentCityID'];
       $permanentPhone1=$_POST['permanentPhone1'];
       $permanentPhone2=$_POST['permanentPhone2'];
       $Cell1=$_POST['Cell1'];
       $Cell2=$_POST['Cell2'];
       $internalRef=$_POST['internalRef'];
       $externalRef=$_POST['externalRef'];
       $jobDiscription=$_POST['jobDiscription']; 

       $qry = "INSERT INTO emppersonalinfo(employeePersonalID,pinCode,employeeName,fatherName,gender,materialStatus,children,dependents,relegion,dateOfBirth,identityMark,bloodGroup,cnic,ntn,basicQualification,tempAddress,tempCity,tempPhone1,tempPhone2,permanentAddress,permanentCity,permanentPhone1,permanentPhone2,cell1,cell2,internalRef,externalRef,jobDiscription) VALUES ('$employeePersonalID','$pinCode','$employeeName','$fatherName','$gender','$materialStatus','$children','$dependents','$relegion','$dateOfBirth','$identityMark','$bloodGroup','$cnic','$ntn','$basicQualification','$tempAddress','$tempCityID','$tempPhone1','$tempPhone2','$permanentAddress','$permanentCityID','$permanentPhone1','$permanentPhone2','$Cell1','$Cell2','$internalRef','$externalRef','$jobDiscription')";    
      
      $run = mysqli_query($conn,$qry)or die("error");
      if(!$run){
       echo "error";
      }
      else{
      echo "inserted";
      header("Location:{$hostName}/forms/emp/personalInformation");
      }
      
    // }
 

?>