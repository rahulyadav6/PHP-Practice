<!DOCTYPE html>
<html lang="en">
<body>
<form action="form.php" method="get">
    Color: <input type="text" name ="color"><br>
    Plural Noun: <input type="text" name="pluralNoun"><br>
    Celebrity: <input type="text" name = "celebrity"><br>
    <input type="submit" value="Submit">
</form>
<?php 
    if(isset($_GET["color"])) $color = $_GET["color"];
    if(isset($_GET["pluralNoun"])) $pluralNoun = $_GET["pluralNoun"];
    if(isset($_GET["celebrity"])) $celebrity = $_GET["celebrity"];
    if(isset($color) && isset($pluralNoun) && isset($celebrity)){
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity<br>";
    }
?>
</body>
</html>
