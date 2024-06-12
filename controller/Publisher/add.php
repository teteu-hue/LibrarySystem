<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbPublisherBook.php");

if(!empty($_POST["nome_editora"])){
    $namePublisher = $_POST["nome_editora"];
    $publisher = new PublisherBook($namePublisher);

    try 
    {
        $dbp = new DbPulisherBook();
        $query = $dbp->insertPublisher($publisher);
        unset($dbp);
        
        if($query != NULL){
            header('Location: /php07/LibrarySystem/view/menu-admin-publisher.php');
        } 

    } 
    catch(PDOException $e)
    {
            header('Location: /php07/LibrarySystem/view/formCreatePublisher.php?error=2');
    }

} else {
    header('Location: /LibrarySystem/view/formCreatePublisher.php?error=1');
}
