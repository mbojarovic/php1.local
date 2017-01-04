<?php

namespace App\Models;

class GuestBookRecord
{
    protected $text;

    function __construct($id, $text)
    {
        $this->id = $id;
        $this->text = $text;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }
}