<?php

Class Address
{
    private string $street;
    private int $houseNumber;
    private string $complement;

    public function __construct($street, $houseNumber, ?string $complement = null)
    {
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->complement = $complement;
    }

    public function getPatio()
    {
        return $this->street;
    }

    public function setPatio($street)
    {
        $this->street = $street;
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

?>