<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbGenderBook.php");


if(!empty($_POST["nome_genero"])){
    $gender = new GenderBook($_POST['nome_genero']);

    try {

        $dbg = new DbGenderBook();
        $query = $dbg->insertGender($gender);
        unset($dbg);
        
        if($query != NULL){
            header('Location: /LibrarySystem/view/menu-admin-gender.php');
        } 

    } catch(PDOException $e)
    {
            header('Location: /LibrarySystem/view/formCreateGender.php?error=2');
    }

} else {
    header('Location: /LibrarySystem/view/formCreateGender.php?error=1');
}

?>