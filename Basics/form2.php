<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "form2.php" method = "post">
        Name: <input type="text" name="name"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Submit">

    </form>
    <?php
        if(isset($_POST["name"])) $name = $_POST["name"];
        if(isset($_POST["password"])) $password = $_POST["password"];
        if(isset($name)) echo $name;
        if(isset($name)) echo $password;
    ?>
</body>
</html>