<?php
    // $a = readfile("myfile.txt");

    $fptr = fopen("myfile.txt", "r");

    // $content = fread($fptr,5);
    $content = fread($fptr, filesize("myfile.txt"));
    echo $content;

    fclose($fptr);

?>