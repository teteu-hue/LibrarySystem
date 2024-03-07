<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
    require("Notebook/Notebook.php");
    require("database/books.php");
    require("Library/Library.php");
    ?>
</head>
<body>

<?php

//$address = new Address("Av José Bonifácio", 540, "Prédio Educacional");
//$library = new Library("ETEC JK", $address, $books);
//$library->showBooks();
?>

<form action="acao.php" method="post">
    <pre>
        <label for="">Nome</label>
        <input type="text" name="nome" id="">

        <label for="">Telefone</label>
        <input type="tel" name="telefone" id="">

        <button type="submit">Enviar</button> <button type="reset">Limpar</button>
    </pre>

</form>

<form action="acao.php" method="post">
    <pre>
        <label for="">Endereço</label>
        <input type="text" name="endereco" id="">

        <label for="">Email</label>
        <input type="email" name="email" id="">

        <button type="submit">Enviar</button> <button type="reset">Limpar</button>
    </pre>

</form>

</body>
</html>