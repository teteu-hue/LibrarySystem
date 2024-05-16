<?php


class Subject
{
    private string $name;

    public function __construct()
    {
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

}


?>