<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();
require_once("$rootDir/model/Book/DbGenderBook.php");

$dbg = new DbGenderBook();

if(isset($_GET["id_genero"])){

    $id_gender = $_GET['id_genero'];

    try 
    {
       header("Location: /php07/LibrarySystem/view/formEditGender.php?edit=$id_gender");
    } 
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
} else {
    echo "not working";
}

?>