<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativeArray.php" method = "post" >
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
        $grades = array("Rahul"=>"A+", "Kaushal"=>"A", "Ritesh"=>"B+");
        if(isset($_POST["student"])) $student = $_POST["student"];
        echo $grades[$_POST["student"]];

    ?>
</body>
</html>