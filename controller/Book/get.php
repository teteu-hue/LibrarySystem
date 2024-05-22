<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();
require_once("$rootDir/model/Book/DbBook.php");

$dbg = new DbBook();

if(isset($_GET["id_livro"])){

    $id_book = $_GET['id_livro'];

    try 
    {
       header("Location: /LibrarySystem/view/formEditBook.php?edit=$id_book");
    } 
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
} else {
    echo "not working";
}

?>