<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    require("Library/Library.php");
    ?>
<body>
    
    <h1>Os dados vieram para cá</h1>
    <?php

        $library->insertBook(new Book($_POST['nameBook'], floatval($_POST['price']), $_POST['genderBook'], floatval($_POST['numPage'])));
        echo "Gênero do livro: " ;
        echo "<br>";
        echo "Números de páginas: " ;
    ?>

</body>
</html>