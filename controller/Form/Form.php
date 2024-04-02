<?php

class Form{
    
    public static function addBook($genderBooks, $library){
        $genderBook = GenderBook::getGenderBookById($_POST['genderBook'], $genderBooks);

        $library->insertBook(new Book($_POST['nameBook'], $genderBook, floatval($_POST['price']), floatval($_POST['numPage'])));
    }
}


?>