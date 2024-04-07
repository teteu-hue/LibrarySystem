<?php 
    require("Notebook/Notebook.php");
    require("Address/Address.php");
    require("Book/Book.php");
    require("Database/books.php");
    require("Library/Library.php");
?>

<?php include "header.php" ?>

<?php 

    $genderBook;

    for($i = 0; $i < count($genderBooks); $i++){
        if($genderBooks[$i]->getName() == $_POST['genderBook']){
            $genderBook = $genderBooks[$i]->getName();
        }
    }

    $newBook = new Book($_POST['nameBook'], $genderBook, floatval($_POST['price']), floatval($_POST['numPage']));

    $library->insertBook($newBook);

    $library->getBookById($newBook->getIdBook);
    

?>

<?php include "footer.php" ?>