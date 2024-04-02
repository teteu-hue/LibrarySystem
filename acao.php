<?php 
    require("controller/Form/Form.php");

    require("model/Address/Address.php");
    require("model/Notebook/Notebook.php");
    require("model/Book/Book.php");
    require("Database/books.php");
    require("model/Library/Library.php");
?>

<?php include "view/header.php" ?>

<?php 

    Form::addBook($genderBooks, $library);

    echo $library->getBookById(16)->getInfoBook();

    $library->deleteBook(16);
    echo "<br>****************<br>";

    echo $library->getBookById(16);
    

?>

<?php include "view/footer.php" ?>