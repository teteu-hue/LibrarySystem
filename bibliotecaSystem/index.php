<?php

require("Notebook/Notebook.php");
require("database/books.php");
require("Biblioteca/Biblioteca.php");

$address = new Address("Av José Bonifácio", 540, "Prédio Educacional");

$biblioteca = new Biblioteca("ETEC JK", $address, $books);

$biblioteca->getBookById(4, $books);

/*
for($i = 0; $i < 4; $i++)
{
    echo "Book: " . $books[$i]->getNameBook() . " //" . " Gender: " . $books[$i]->getGenderBook() . "\n";
}
*/

?>