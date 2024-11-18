<?php
    session_start();
?>
<!DOCTYPE html>
<body>
    <?php
        echo "Favorite color is  " . $_SESSION["favColor"] . "<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>"; 
    ?>
</body>
</html>