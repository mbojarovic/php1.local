<?php

namespace App\Models;
use App\Db;

class GuestBook
{
    protected $records = [];

    public function __construct()
    {
        $db = new Db();
        $this->records = $db->query('SELECT * FROM guestbook');
        //var_dump($this->records);
    }

    public function getAllRecords()
    {
        var_dump($this->records);
        return $this->records;
    }

/*    public function append(GuestBookRecord $record)
    {
            $this->records[] = $record;
    }

    public function save()
    {
        $arr = [];
        foreach ($this->records as $value) {
            $arr[] = $value->getText();
        }
        $str = implode("\n", $arr);
        file_put_contents($this->path, $str) ;
    }*/
}