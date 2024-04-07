<?php 
    require_once("../controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();

    require("$rootDir/controller/Form/Form.php");
    require("$rootDir/model/Address/Address.php");
    require("$rootDir/model/Notebook/Notebook.php");
    require("$rootDir/model/Book/Book.php");
    require("$rootDir/Database/books.php");
    require("$rootDir/model/Library/Library.php");
?>

<?php include "header.php" ?>

<?php 

    //Form::addBook($genderBooks, $library);

    //echo $library->getBookById(8)->getInfoBook();

    //echo "<br>****************<br>";    

    //$library->editBook(8, "Romance de Cristovão", "Drama", 55, 858, "Nova descrição");

    //echo $library->getBookById(8)->getInfoBook();
?>

<?php include "$rootDir/view/footer.php" ?>