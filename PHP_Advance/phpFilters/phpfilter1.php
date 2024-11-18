<?php
    $age = 70;
    // if(filter_var($age, FILTER_VALIDATE_INT)){
    //     echo "Integer is valid";
    // }else echo "Interger is not valid";


    //checking if the it is integer or not and in between given range.

    if(filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range"=>18, "max_range" => 90)))){
        echo "You can vote";
    }else echo "You cannot vote";
?>