<?php
    include './config.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM `user` WHERE `id` = '$id'";
    
    if(mysqli_query($conn, $sql)){
        echo "<script>
        window.location.href = './list.php';
        </script>";
    }
    else{
        echo "wrong";
    }
?>