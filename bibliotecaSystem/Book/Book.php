<?php

require("GenderBook.php");

Class Book extends Notebook
{
    private string $nameBook;
    private GenderBook $genderBook;
    private float $price;
    private $numPage;

    public function __construct($nameBook, $genderBook, ?float $price, int $numPage){
        $this->nameBook = $nameBook;
        $this->genderBook = $genderBook;
        $this->price = $price;
        $this->numPage = $numPage;
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
}

?>