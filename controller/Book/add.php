<?php

require_once("../RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbBook.php");

try 
{
    $db = new DbBook();
    $dbg = new DbGenderBook();
    $dbp = new DbPulisherBook();

    $idGender = $_POST["id_genero"];
    $idPublisher = $_POST["id_editora"];

    $nameBook = $_POST["nome_livro"];
    $price = $_POST["preco"];
    $numPages =  $_POST["numero_paginas"];
    $description = $_POST["descricao"];

    $genderBook = $dbg->getGenderById($idGender)->fetch();
    $publisherBook = $dbp->getPublisherById($idPublisher)->fetch();

    $gender = new GenderBook($genderBook["nome_genero"]);
    $publisher = new PublisherBook($publisherBook["nome_editora"]);

    $book = new Book($nameBook, $gender, $publisher, $price, $numPages, $description);

    $db->insertBook($book);
    header('Location: /LibrarySystem/view/books_page.php');
} 
catch (PDOException $e) 
{
    echo $e->getMessage();
} 
catch (Exception $e) 
{
    echo $e->getMessage();
}
?>
