<?php 
require_once("../RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbPublisherBook.php");

if($_GET["id_editora"] > 0){
    $idPublisher = $_GET["id_editora"];

    DbPulisherBook::deletePublisher($idPublisher);

    header('Location: /LibrarySystem/view/menu-admin-publisher.php');
}

?>