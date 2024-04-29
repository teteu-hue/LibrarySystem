<?php
require_once("../RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbGenderBook.php");


if(isset($_POST["nome_genero"]) === TRUE){
    $gender = new GenderBook($_POST['nome_genero']);
    $query = DbGenderBook::insertGender($gender);

    if($query != NULL){
        header('Location: /LibrarySystem/view/menu-admin-gender.php');
    } else {

    }

} else {
    echo "Livro inválido";
}

?>