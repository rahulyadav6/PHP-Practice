<html>
    <body>
        <?php
        // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);



        // $car = ["brand"=>"Ford", "model"=>"Mustang", "year"=>1964];
        // foreach($car as $x => $y){
        //     echo "$x: $y <br>";
        // }


        // $friends = array("Rahul", "Kaushal", "Ritesh");
        // for($i=0; $i<count($friends); $i++){
        //     echo "Friend number " .($i+1). " is {$friends[$i]} <br>";
        // }


        //2d array

        $cars = [
            ["Volvo",22,18],
            ["BMW",15,13],
            ["Saab",5,2],
            ["Land Rover",17,15],
        ];
        for($row = 0; $row < 4; $row++){
            for($col=0; $col <3; $col++){
                echo $cars[$row][$col];
                echo "<br>";
            }
        }
        ?>
    </body>
</html>

