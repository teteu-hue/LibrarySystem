<?php

Class Library
{

    private string $name;
    private Address $address;

    public function __construct($name, Address $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBooks(){
        return $this->books;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
    
    public function insertBook(Book $book){
        array_push($this->books, $book);
        return "Sucessed!";
    }

    public function deleteBook($idBook){
        $book = $this->getBookById($idBook);
        $deletedBook = array_search($book, $this->books);
        if($deletedBook !== false){
            unset($this->books[$deletedBook]);
        } else {
            echo "Elemento não encontrado";
        }
    }

    public function editBook($idBook, $nameBook, $genderBook, $price, int $numPage, $description){
        $book = $this->getBookById($idBook);
        $book->setNameBook($nameBook);
        $book->getGenderBook()->setName($genderBook);
        $book->setPrice($price);
        $book->setNumPage($numPage);
        $book->setDescription($description);
    }
}

$library = new Library("ETEC JK", $address);
?>