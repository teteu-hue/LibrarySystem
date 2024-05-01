<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbPublisherBook.php");


if(!empty($_POST["nome_editora"])){
    $namePublisher = $_POST["nome_editora"];
    $publisher = new PublisherBook($namePublisher);

    try {

        $query = DbPulisherBook::insertPublisher($publisher);
        
        if($query != NULL){
            header('Location: /LibrarySystem/view/menu-admin-publisher.php');
        } 

    } catch(PDOException $e)
    {
            header('Location: /LibrarySystem/view/formCreatePublisher.php?error=2');
    }

} else {
    header('Location: /LibrarySystem/view/formCreatePublisher.php?error=1');
}
