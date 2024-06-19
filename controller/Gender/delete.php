<?php 
require_once("../RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbGenderBook.php");

if($_GET["id_genero"] > 0){
    $id_gender = $_GET["id_genero"];

    $dbg = new DbGenderBook();
    $gender = $dbg->getGenderById($id_gender);
    
    if($gender == NULL)
    {
        header('Location: /php07/LibrarySystem/index.php');
    } 
    else 
    {
        $dbg->deleteGender($id_gender);
        header('Location: /php07/LibrarySystem/view/menu-admin-gender.php');
    }
}

?>
