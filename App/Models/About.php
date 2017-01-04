<?php

namespace App\Models;
use App\Db;

class About
{
    protected $data;
    protected $about;

    public function getAbout()
    {
        $db = new Db();
        $this->data = $db->query('SELECT id, aboutTitle, aboutText FROM about');

        $this->about = [];
        foreach ($this->data as $text) {

            $this->about[] = new AboutText($text->aboutTitle, $text->aboutText);
        }
        return $this->about;
    }

    public function editAbout($aboutTitle, $aboutText)
    {
        $db = new Db();
        return $this->data = $db->query('update about SET aboutTitle=:aboutTitle, aboutText=:aboutText',
        [':aboutTitle' => $aboutTitle, ':aboutText' => $aboutText]);
    }

}