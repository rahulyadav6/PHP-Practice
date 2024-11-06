<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        function sum($x, $y, &$num1){
            $z = $x + $y;
            $num1++;
            return $z;
        }

        $num1 = 5;
        echo sum(5,5,$num1);
        echo "<br>";
        echo $num1;
        echo "<br>";
        $name = "Rahul Yadav";
        echo $name;
    ?>
</body>
</html>