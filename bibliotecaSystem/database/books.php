<?php

require ("Book/Book.php");

$genderBook = [
    new GenderBook("Romance"),
    new GenderBook("Drama"),
    new GenderBook("Terror"),
    new GenderBook("Fantasia")
];

$books = [
    new Book("1984", $genderBook[0], 20.0, 500),
    new Book("O diário de Anne Frank", $genderBook[1], 25.0, 328),
    new Book("Vamos falar de amor", $genderBook[0], 26, 877),
    new Book("A culpa é das estrelas", $genderBook[0], 28, 65),
    new Book("Querido John", $genderBook[0], 29, 300),
    new Book("It Coisa", $genderBook[2], 25, 400),
    new Book("Alice no País das Maravilhas", $genderBook[3], 35, 650),
    new Book("Senhor dos Anéis", $genderBook[3], 35, 550),
    new Book("As crônicas de Nárcia", $genderBook[3], 35, 650),
    new Book("As crônicas de Nárcia, Princípe Caspian", $genderBook[3], 35, 650),
    new Book("As crônicas de Nárcia, O Cavalo e seu Menino", $genderBook[3], 35, 650),
    new Book("As crônicas de Nárcia, A Cadeira de Prata", $genderBook[3], 35, 650),
    new Book("As crônicas de Nárcia, O Leão a Feiticeira e o Guarda roupa", $genderBook[3], 35, 650),
    new Book("Coraline e o Mundo Secreto", $genderBook[2], 35, 650),
    new Book("As Crônicas de Spiderwick", $genderBook[3], 35, 650),
];

?>