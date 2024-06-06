<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbGenderBook.php");

if(!empty($_POST['nome_genero'])){

    try 
    { 
        $idGender = $_GET['id_genero'];
        $nameGender = $_POST['nome_genero'];
        $dbg = new DbGenderBook();
        $dbg->editGender($idGender, $nameGender); 
        unset($dbg);
        header("Location: /LibrarySystem/view/menu-admin-gender.php");
    } 
    catch (PDOException $e)
    {
        header("Location: /LibrarySystem/view/formEditGender.php?error=2&edit=$idGender");
    }
    
} else {
    header("Location: /LibrarySystem/view/formEditGender.php?error=1&edit=$idGender");
}

?>