<?php
    include './config.php';

    $sql = 'SELECT * FROM `user`';

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            $user[] = $row;
        }
    }
    else{
        echo "something wromg";
    }
?>