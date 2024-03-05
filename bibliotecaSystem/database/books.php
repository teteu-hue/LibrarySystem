<?php

require ("Book/Book.php");

$genderBook = [
    new GenderBook("Romance"),
    new GenderBook("Drama")
];

$books = [
    new Book("1984", $genderBook[0], 20.0, 500),
    new Book("O diário de Anne Frank", $genderBook[1], 25.0, 328),
    new Book("Vamos falar de amor", $genderBook[0], 26, 877),
    new Book("A culpa é das estrelas", $genderBook[0], 28, 65)
];

?>