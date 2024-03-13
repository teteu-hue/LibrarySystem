<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
    require("Notebook/Notebook.php");
    require("Library/Library.php");
    ?>
</head>
<body>

<?php

$address = new Address("Av José Bonifácio", 540, "Prédio Educacional");
$library = new Library("ETEC JK", $address, $books);
//$library->showBooks();
?>

<form action="acao.php" method="post">
    <pre>
        <label for="">Nome do Livro</label>
        <input type="text" name="nameBook" id="">

        <label for=""></label>
        <input type="text">

        <select name="" size=<?php count($genderBooks);?> id="">
            <option value=<?php  ?>>
                
            <?php echo $library->getAllGenders() ?>

            </option>
        </select>

        
        <label for=""></label>
        <input type="number" name="price">

        <label for=""></label>
        <input type="text">

        <button type="submit">Enviar</button> <button type="reset">Limpar</button>
    </pre>

</form>

</body>
</html>