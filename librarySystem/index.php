<?php

require("Notebook/Notebook.php");
require("database/books.php");
require("Library/Library.php");

// Book::getBookById(5, $books);

$address = new Address("Av José Bonifácio", 540, "Prédio Educacional");

$library = new Library("ETEC JK", $address, $books);

$library->getBookById(5);

$library->insertBook(new Book("Senhor dos Anéis A culpa dos caídos", $genderBooks[3], 56, 900));
$library->getBookById(16);

/*
for($i = 0; $i < 4; $i++)
{
    echo "Book: " . $books[$i]->getNameBook() . " //" . " Gender: " . $books[$i]->getGenderBook() . "\n";
}
*/

?>