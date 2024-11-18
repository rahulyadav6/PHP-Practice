<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<body>
    <?php

        $_SESSION["favColor"] = "green";
        $_SESSION["favanimal"] = "dog";
    
        echo "Session variables are set.";
    ?>

</body> 
</html>