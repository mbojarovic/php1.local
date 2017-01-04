<?php

namespace App\Models;

class GuestBookRecord
{
    protected $text;

    function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}