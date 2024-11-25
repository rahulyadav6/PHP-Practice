<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);

    $sql = "CREATE DATABASE TEST3";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "The DB was created successfully<br>";
    }else{
        echo("The DB was not created because of the error -----> ".mysqli_error($conn));
    }
    
?>