<?php

Class GenderBook
{
    private $idGender;
    private $name;

    public function __construct($idGender, $name)
    {
        $this->idGender = $idGender;
        $this->name = $name;
    }

    public function getGenderID(){
        return $this->idGender;
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
