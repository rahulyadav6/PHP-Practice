<!DOCTYPE html>
<html lang="en">
<body>
    <form action = "5_insertingFormDataToDB.php" method = "post"> 
        <label for="email">Enter your email</label>
        <input type="email" id="email"><br>
        <label for="password">Enter your password</label>
        <input type="password" id="password"><br>
        <button type = "submit">Submit</button>
    </form>
<?php 
    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databse = "contacts";
    
    //creates a connection.
    $conn = mysqli_connect($servername, $username, $password, $databse);

    //die if conneciton was not successfull
    if(!$conn){
        die ("Sorry failed to connect to database ".$database);
    }else{
        echo "Connection was successfull <br>";
    }

    $sql = 
?>
</body>
</html>