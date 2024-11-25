<?php
//connectiong to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "friends";

//creates a connection.
$conn = mysqli_connect($servername, $username, $password, $database);



//die if the coonection was not successful.
if(!$conn){
    die ("Sorry failed to connect to database ".$database);
}else{
    echo "Connection was successfull <br>";
}

$name = "Ritesh";
$salary = 538939;

$sql = "INSERT INTO `employee` (`Name`, `Salary`) VALUES ('$name', '$salary')";
$result = mysqli_query($conn, $sql);


//check for insertion into table.
if($result){
    echo "Inserted to table successfully <br>";
}else{
    echo "Insertion to table failed " . $mysqli_error($conn);
}




?>