<?php

class Topic
{
    private int $topicID;
    private string $name_topic;

    public function __construct()
    {
    }

    public function getTopicID()
    {
        return $this->topicID;
    }

    public function getNameTopic()
    {
        return $this->name_topic;
    }

    public function setNameTopic()
    {

    }

}

?>