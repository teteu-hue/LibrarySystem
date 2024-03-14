<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Os dados vieram para cá</h1>
    <?php
        echo $_POST['nameBook'];
        echo "<br>";
        echo $_POST['price'];
        echo "<br>";
        echo $_POST['genderBook'];
        echo "<br>";
        // echo $_POST['email'];
    ?>

</body>
</html>