<?php

include "GenderBook.php";

Class Book extends Notebook
{
    private static int $idSum = 0;
    private int $idBook;
    private string $nameBook;
    private GenderBook $genderBook;
    private float $price;
    private int $numPage;

    public function __construct($nameBook, $genderBook, $price, int $numPage){
        $this->nameBook = $nameBook;
        $this->genderBook = $genderBook;
        $this->price = $price;
        $this->numPage = $numPage;
        $this->idBook = ++Book::$idSum;
    }

    /* GETTERS AND SETTERS */

    public function getIdBook() : int {
        return $this->idBook;
    }

    public function getNameBook()
    {
        return $this->nameBook;
    }

    public function setNameBook($nameBook)
    {
        $this->nameBook = $nameBook;
    }

    public function getGenderBook()
    {
        return $this->genderBook->getName();
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getNumPage()
    {
        return $this->numPage;
    }

    public function setNumPage($numPage)
    {
        $this->numPage = $numPage;
    }

    /* GETTERS AND SETTER */

    public function getInfoBook() : void
    {
        echo "The Id is: " . $this->getIdBook() . "<br>";
        echo "The Name of Book is: " . $this->getNameBook() . "<br>";
        echo "The Gender of Book is: " . $this->getGenderBook() . "<br>";
        echo "The Number of page is: " . $this->getNumPage() . "<br>";
    }
}

?>