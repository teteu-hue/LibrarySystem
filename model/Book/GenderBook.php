<?php

Class GenderBook
{
    private static int $idSum = 0;
    private int $idBook;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->idBook = ++GenderBook::$idSum;
    }

    public function getIdGenderBook() : int {
        return $this->idBook;
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
?>
