<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "friends";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if($conn){
        echo "Connection was successfull";
    }else{
        echo "Failed to connect to database ". mysqli_error($conn);
    }
    $sql = "CREATE TABLE  `employee` (`Sno` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT NULL , `Salary` INT(10) NOT NULL , PRIMARY KEY (`Sno`))";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Table is created successfully";
    }else{
        die ("Failed to created table" . $mysqli_error($conn));
    }

    
    
?>