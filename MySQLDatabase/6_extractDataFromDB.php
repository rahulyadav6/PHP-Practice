<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employee";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if($conn){
        echo("Connection was successfull");
    }else{
        echo("Failed to connect to " .$database);
    }

    $sql = "SELECT emp_name, salary FROM employee_details";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'><tr><th>Employee Name</th><th>Salary</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row["emp_name"] . "</td><td>" . $row["salary"] . "</td></tr>";
        }
        echo "</table>";
    }else{
        echo "0 results found";
    }

?>