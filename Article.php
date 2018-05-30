<?php

class Article
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle()
    {
        $this->title = $title;
    }
}
