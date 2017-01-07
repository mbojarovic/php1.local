<?php

namespace App\Models;


class Article
{
    protected $id;
    protected $newsTitle;
    protected $newsText;
    protected $newsAuthor;
    protected $newsDate;

    function __construct($id, $newsTitle, $newsText, $newsAuthor, $newsDate)
    {
        $this->id = $id;
        $this->newsTitle = $newsTitle;
        $this->newsText = $newsText;
        $this->newsAuthor = $newsAuthor;
        $this->newsDate = $newsDate;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->newsTitle;
    }

    public function getText()
    {
        return $this->newsText;
    }

    public function getAuthor()
    {
        return $this->newsAuthor;
    }

    public function getDate()
    {
        return $this->newsDate;
    }
}