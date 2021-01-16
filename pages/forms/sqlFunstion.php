<?php

    $globalVariable = $_POST['globalVariable'];
   
    switch ($globalVariable) {
        case '1':
            addProvince();
            break;
        
        default:
            # code...
            break;
    }
// Insert Data Function  Start From Here
    function addProvince(){
        include('../config/config.php"');
        if(isset($_POST['add-province'])){
        echo $provinceName=$_POST['provinceName'];
        echo $provinceStatus=$_POST['provinceStatus'];
        $qry = "INSERT INTO tblprovince(provinceName,provinceStatus) VALUES ('$provinceName','$provinceStatus')";    
        $run = mysqli_query($conn,$qry) or die("Error");
        if($run){
        echo "inserted";
        }
        else{
        die("Not inserted");
        }
         header("Location:{$hostName}/forms/province.php");
        }
        }
          // Insert Data Function End From Here

?>