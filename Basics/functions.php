<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        // function setHeight($minheight = 50) {
        //     echo "The height is : $minheight <br>";
        // }
          
        // setHeight(350);
        // setHeight(); // will use the default value of 50
        // setHeight(135);
        // setHeight(80);








        // function sum($x, $y) {
        //     $z = $x + $y;
        //     return $z;
        // }
          
        // echo "5 + 10 = " . sum(5, 10) . "<br>";
        // echo "7 + 13 = " . sum(7, 13) . "<br>";
        // echo "2 + 4 = " . sum(2, 4);






        
        //Passing Arguments by Reference
        function add_five(&$value) {
            $value += 5;
        }
          
        $num = 2;
        add_five($num);
        echo $num;
    ?>
</body>
</html>