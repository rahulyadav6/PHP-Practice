<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Normally, when a function is completed/executed, all of its variables are deleted. 
        // However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
        // To do this, use the static keyword when you first declare the variable:

        function test(){
            static $x = 0;
            echo $x;
            $x++;
        }
        test();
        test();
        test();
    ?>
</body>
</html>