<?php
    $email = "jo- ^h n.doe@example.com";
    $sanitizedEmail = filter_var($email,FILTER_SANITIZE_EMAIL);
    if(filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)){
        echo("$sanitizedEmail is a valid email address");
    }else echo("$sanitizedEmail is not a valid email address");


    echo "<br>";
    echo $email;
?>