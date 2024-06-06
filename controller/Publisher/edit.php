<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbPublisherBook.php");

if(!empty($_POST['nome_editora'])){

    try 
    { 
        $idPublisher = $_GET['id_editora'];
        $namePublisher = $_POST['nome_editora'];
        $dbp = new DbPulisherBook();
        $dbp->editPublisher($idPublisher, $namePublisher);
        unset($dbp);

        header("Location: /LibrarySystem/view/menu-admin-publisher.php");
    } 
    catch (PDOException $e)
    {
        header("Location: /LibrarySystem/view/formEditPublisher.php?error=2&edit=$idPublisher");
    }
    
} else {
    header("Location: /LibrarySystem/view/formEditPublisher.php?error=1&edit=$idPublisher");
}

?>