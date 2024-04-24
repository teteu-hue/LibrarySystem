<?php

class PublisherBook
{
    private string $namePublisher;

    public function __construct(string $namePublisher)
    {
        $this->namePublisher = $namePublisher;
    }

    public function getNamePublisher()
    {
        return $this->namePublisher;
    }

    public function setNamePublisher(string $namePublisher){
        $this->namePublisher = $namePublisher;
    }
}

?>
