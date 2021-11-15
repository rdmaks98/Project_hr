<?php 
    $servername = "localhost";
    $username = "root";
    $password= "";
    $dbname = "hardy";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("not found".mysqli_connect_error());
    }
    else{
        echo "";
    }
?>