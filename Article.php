<?php

class Article
{
     /**
     * @var string $title Describe the title data
     */
    private $title;

    /**
     * @param string $title 
     */
    public function __construct($title)
    {
        $this->title = $title;
    }
    
    /**
     * @param string obtenir le titre
     * return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string déterminer le titre
     */
    public function setTitle()
    {
        $this->title = $title;
    }
}
