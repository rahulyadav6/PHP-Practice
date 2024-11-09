<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basic-calculator.php" method="post" >
        First Num: <input type="number"  name="num1"><br>
        Operator: <input type="text" name="op"><br>
        Second Num: <input type="number" name="num2"><br>
        <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["num1"])) $num1 = $_POST["num1"];
            if(isset($_POST["op"])) $op = $_POST["op"];
            if(isset($_POST["num2"])) $num2 = $_POST["num2"];


            $result = null;
            if($op=="+") $result = $num1+$num2;
            else if($op == '-') $result = $num1-$num2;
            else if($op=='*') $result = $num*$num2;
            else if($op=='/') $result = $num/$num2;
            else echo "Invalid operator";

            if($result != null) echo "Result: $result";
            
        }
    ?>
</body>
</html>