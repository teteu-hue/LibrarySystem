<?php 
require_once("../RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbBook.php");


try
{
if($_GET['id_livro'] > 0)
{
    $db = new DbBook();
    $idBook = $_GET['id_livro'];

    $book = $db->getBookById($idBook);

    if($book == NULL)
    {
        header("Location: /php07/LibrarySystem/index.php");
    } else 
    {
        $db->deleteBook($idBook);
        header("Location: /php07/LibrarySystem/view/menu-admin-book.php");
    }
}
}
catch ( PDOException $e)
{
    echo $e->getMessage();
}

?>