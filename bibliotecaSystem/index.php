<?php

require("Notebook/Notebook.php");
require("database/books.php");
require("Biblioteca/Biblioteca.php");

// Book::getBookById(5, $books);

$address = new Address("Av José Bonifácio", 540, "Prédio Educacional");

$biblioteca = new Biblioteca("ETEC JK", $address, $books);

$biblioteca->getBookById(5);

$biblioteca->insertBook(new Book("Senhor dos Anéis A culpa dos caídos", $genderBooks[3], 56, 900));
$biblioteca->getBookById(16);

/*
for($i = 0; $i < 4; $i++)
{
    echo "Book: " . $books[$i]->getNameBook() . " //" . " Gender: " . $books[$i]->getGenderBook() . "\n";
}
*/

?>