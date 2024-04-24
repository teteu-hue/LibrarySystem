<?php 
    require_once("../controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();
    require_once("$rootDir/model/Book/DbGenderBook.php");

    require("$rootDir/controller/Form/Form.php");
    require("$rootDir/model/Address/Address.php");
    require("$rootDir/model/Book/Book.php");
?>

<?php include "header.php" ?>

<?php 
    $gender = DbGenderBook::getGenderById($_POST['id_genero']);
    
    $genderBook = new GenderBook($gender['nome_genero']);

    //$book = new Book('teste', $genderBook);

    

?>

<?php include "$rootDir/view/footer.php" ?>