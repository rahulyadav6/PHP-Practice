<?php 
    $to = "yrahul8265@gmail.com";
    $subject = "Testing...";
    $message = "Hello ! This is a sample mail";
    $from = "ry573870@gmail.com";
    $headers =  "From: $from";
    
    mail($to, $subject, $message,$headers); 

    echo "Mail sent successfully";
?>