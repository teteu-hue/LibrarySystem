<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbPublisherBook.php");

if(isset($_GET["id_editora"])){

    $id_publisher = $_GET['id_editora'];

    try {
       

       header("Location: /php07/LibrarySystem/view/formEditPublisher.php?edit=$id_publisher");
    } catch(PDOException $e){
        echo $e->getMessage();
    }
} else {
    echo "not working";
}

?>