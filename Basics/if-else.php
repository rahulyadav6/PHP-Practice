<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 13;

        if ($a > 10) {
          echo "Above 10";
          if ($a > 20) {
            echo " and also above 20";
          } else {
            echo " but not above 20";
          }
        }
    ?>
</body>
</html>