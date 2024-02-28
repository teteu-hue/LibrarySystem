<?php

Class Address
{
    private string $patio;
    private int $houseNumber;
    private string $complement;

    public function __construct($patio, $houseNumber, ?string $complement = null)
    {
        $this->patio = $patio;
        $this->houseNumber = $houseNumber;
        $this->complement = $complement;
    }

    public function getPatio()
    {
        return $this->patio;
    }

    public function setPatio($patio)
    {
        $this->patio = $patio;
    }

    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    public function getComplement()
    {
        return $this->complement;
    }

    public function setComplement($complement)
    {
        $this->complement = $complement;
    }

}

Class Biblioteca
{
    private string $name;
    private Address $address;
    private array $books;

    public function __construct($name, $address, $books)
    {
        $this->name = $name;
        $this->address = $address;
        $this->books = $books;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
}

Class GenderBook
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this-> name = $name;
    }
}

abstract class Notebook
{ 
}

Class Book extends Notebook
{
    private string $nameBook;
    private GenderBook $genderBook;
    private float $price;
    private $numPage;

    // public function __construct(){
    // }

    // public function __construct($nameBook){
    //     $this->nameBook = $nameBook;
    // }

    // public function __construct($nameBook, $genderBook){
    //     $this->nameBook = $nameBook;
    //     $this->genderBook = $genderBook;
    // }

    // public function __construct($nameBook, $genderBook, $price)
    // {
    //     $this->nameBook = $nameBook;
    //     $this->genderBook = $genderBook;
    //     $this->price = $price;
    // }

    public function __construct($nameBook, $genderBook, $price, $numPage){
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
        return $this->genderBook;
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

$genderBook = [
    new GenderBook("Romance"),
    new GenderBook("Drama")
];

$books = [
    new Book("1984", $genderBook[0], 20.0, 500),
    new Book("O diário de Anne Frank", $genderBook[1], 25.0, 328),
    new Book("Vamos falar de amor", $genderBook[0], 26, 877),
    new Book("A culpa é das estrelas", $genderBook[0], 28, 65)
];


for($i = 0; $i < 4; $i++)
{
    echo $books[$i]->getNameBook() . "<br/>";
}

?>