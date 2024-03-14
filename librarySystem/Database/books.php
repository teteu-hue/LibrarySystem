<?php

require ("Book/Book.php");

$genderBooks = [
    new GenderBook("Romance"),
    new GenderBook("Drama"),
    new GenderBook("Terror"),
    new GenderBook("Fantasia")
];

$books = [
    new Book("1984", $genderBooks[0], 20.0, 500),
    new Book("O diário de Anne Frank", $genderBooks[1], 25.0, 328),
    new Book("Vamos falar de amor", $genderBooks[0], 26, 877),
    new Book("A culpa é das estrelas", $genderBooks[0], 28, 65),
    new Book("Querido John", $genderBooks[0], 29, 300),
    new Book("It Coisa", $genderBooks[2], 25, 400),
    new Book("Alice no País das Maravilhas", $genderBooks[3], 35, 650),
    new Book("Senhor dos Anéis", $genderBooks[3], 35, 550),
    new Book("As crônicas de Nárcia", $genderBooks[3], 35, 650),
    new Book("As crônicas de Nárcia, Princípe Caspian", $genderBooks[3], 35, 650),
    new Book("As crônicas de Nárcia, O Cavalo e seu Menino", $genderBooks[3], 35, 650),
    new Book("As crônicas de Nárcia, A Cadeira de Prata", $genderBooks[3], 35, 650),
    new Book("As crônicas de Nárcia, O Leão a Feiticeira e o Guarda roupa", $genderBooks[3], 35, 650),
    new Book("Coraline e o Mundo Secreto", $genderBooks[2], 35, 650),
    new Book("As Crônicas de Spiderwick", $genderBooks[3], 35, 650),
];

