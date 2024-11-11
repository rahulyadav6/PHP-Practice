<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="request.php" methos="post" >
        First Name: <input type="text" name="fname"><br><br>
        Middle Name: <input type="text" name="mname"><br><br>
        Last Name: <input type="text" name="lname"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_REQUEST['fname'])) $fname = $_REQUEST['fname'];
    if (empty($fname)) {
        echo "Name is empty";
      } else {
        echo "Thank your $fname for filling up the form";
      }
    ?>
</body>
</html>