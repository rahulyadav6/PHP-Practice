<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP Form Validation Example</h2>
    <form action="formValidation.php" method="post" >
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
    </form>
    <?php
        
    ?>
</body>
</html>