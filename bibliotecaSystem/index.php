<?php

require("Notebook/Notebook.php");
require("database/books.php");

for($i = 0; $i < 4; $i++)
{
    echo "Book: " . $books[$i]->getNameBook() . " //" . " Gender: " . $books[$i]->getGenderBook() . "\n";
}

?>