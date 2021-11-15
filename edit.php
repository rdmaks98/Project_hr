<?php
    include './config.php';
    $id = $_GET['id'];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE `user` SET `name`='$name', `email`='$email', `password`='$password' WHERE `id`='$id'";
        echo $sql;

        if(mysqli_query($conn,$sql)){
            echo "update";
        }
        else{
            echo "not successful";
        }
    }
    
?>