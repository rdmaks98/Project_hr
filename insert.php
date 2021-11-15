<?php
    include 'config.php';

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";


        if(mysqli_query($conn, $sql)){
            echo "<script>
            window.location.href = './list.php'
            </script>";
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>