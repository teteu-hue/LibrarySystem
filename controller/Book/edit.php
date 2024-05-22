<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbBook.php");

if(!empty($_POST['nome_livro'])){

    try 
    { 
        $idBook = $_GET['id_livro'];
        $nameBook = $_POST['nome_livro'];
        $db = new DbBook();
        //$db->editBook($idBook, $nameBook); 
        unset($dbg);
        header("Location: /LibrarySystem/view/menu-admin-Book.php");
    } 
    catch (PDOException $e)
    {
        header("Location: /LibrarySystem/view/formEditBook.php?error=2&edit=$idBook");
    }
    
} else {
    header("Location: /LibrarySystem/view/formEditBook.php?error=1&edit=$idBook");
}

?>