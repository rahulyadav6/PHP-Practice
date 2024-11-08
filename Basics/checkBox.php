<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkBox.php" method="post">
        Apple: <input type="checkbox" name="fruits[]" value="apples"><br>
        Mango: <input type="checkbox" name="fruits[]" value="mango"><br>
        Banana: <input type="checkbox" name="fruits[]" value="Banana"><br>
        <input type="submit">
    </form>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[1]; 
    ?>
</body>
</html>