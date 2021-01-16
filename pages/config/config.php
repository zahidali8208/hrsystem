<?php
    $hostName ="http://localhost/hrsystem/pages";

    $conn = mysqli_connect("localhost","root","","hrsystem");

    if($conn){
        // echo "Connect";
    }
    else{
        die("Connection Error");
    }

?>