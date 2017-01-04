<?php

namespace App\Models;

class AboutText
{
    protected $title;
    protected $text;

    function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }
}