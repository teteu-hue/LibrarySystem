<?php 
require_once("../RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbPublisherBook.php");

if($_GET["id_editora"] > 0){
    $idPublisher = $_GET["id_editora"];
    $dbp = new DbPulisherBook();
    $publisher = $dbp->getPublisherById($idPublisher);
    
    if($publisher == NULL)
    {
        header('Location: /php07/LibrarySystem/index.php');
    } 
    else 
    {
        $dbp->deletePublisher($idPublisher);
        header('Location: /php07/LibrarySystem/view/menu-admin-publisher.php');
    }
    
    header('Location: /php07/LibrarySystem/view/menu-admin-publisher.php');
}

unset($dbp);

?>