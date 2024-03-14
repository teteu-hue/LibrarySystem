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
    require("Database/books.php");
    ?>
</head>
<?php

// $address = new Address("Av José Bonifácio", 540, "Prédio Educacional");
// $library = new Library("ETEC JK", $address, $books);
//$library->showBooks();
?>

<body>

<form action="acao.php" method="post">
    <pre>
        <label for="">Nome do Livro</label>
        <input type="text" name="nameBook" id="">

        <select name="genderBook" size=<?php count($genderBooks);?> id="">          
        <?php for($i = 0; $i < count($genderBooks); $i++){ ?>
                
                <option value="<?php echo $genderBooks[$i]->getName()?>">
                    <?php echo $genderBooks[$i]->getName()?>
                </option>

        <?php }?>

        </select>

        <label for="">Preço do Livro</label>
        <input type="number" name="price">
        

        <label for="">Número de Páginas</label>
        <input type="number">

        <button type="submit">Enviar</button> <button type="reset">Limpar</button>
    </pre>

</form>

</body>
</html>