<?php
    echo "Connecting sql to php script<br>";
    //ways to connect to a mysql database
    // 1. MYSQLi extension 
    // 2. PDO

    //connecting to the database
    $servername = "localhost";
    $usename = "root";
    $password = "";

    //create a connection
    $conn = mysqli_connect($servername, $usename, $password);

    if(!$conn){
        die("Sorry we failed to connect:" . mysqli_connect_error());
    }else{
        echo "Connection was Successful";
    }
    

?>