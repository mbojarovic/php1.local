<?php

namespace App\Models;
use App\Db;

class GuestBook
{
    protected $data;
    protected $records = [];

    public function getAllRecords()
    {
        $db = new Db();
        $this->data = $db->query('SELECT id, messages FROM guestbook ORDER BY id DESC');

        foreach ($this->data as $text) {
            $this->records[] = new GuestBookRecord($text->id, $text->messages);
        }
        return $this->records;

    }
    public function addOneRecord($record)
    {
        $db = new Db();
        $this->data = $db->query('INSERT INTO guestbook (messages) VALUES (:record)',
            [':record' => $record]);
    }
}