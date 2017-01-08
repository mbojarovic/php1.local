<?php

namespace App\Models;
use App\Db;

class News
{
    protected $data;
    protected $records = [];

    public function getAllNews()
    {
        $db = new Db();
        $this->data = $db->query('SELECT id, newsTitle, newsText, newsAuthor, newsDate FROM news ORDER BY id DESC');

        foreach ($this->data as $text) {
            $this->records[] = new Article($text->id, $text->newsTitle, $text->newsText, $text->newsAuthor, $text->newsDate);
        }
        return $this->records;
    }

    /*public function getShortNews($text, $len = '300')
    {
        return mb_substr($text, 0 , $len);
    }*/

    public function updateNews($id, $newsTitle, $newsText, $newsAuthor, $newsDate)
    {
        $db = new Db();
        return $db->query('UPDATE news SET newsTitle=:newsTitle, newsText=:newsText, newsAuthor=:newsAuthor, newsDate=:newsDate WHERE id=:id',
            [':id' => $id,':newsTitle' => $newsTitle, ':newsText' => $newsText, ':newsAuthor' => $newsAuthor, ':newsDate' => $newsDate]);
    }

    public function getOneNews($id)
    {
        //return self::getAllImages()[$id -1];
        $db = new Db();
        return $db->query('SELECT id, newsTitle, newsText, newsAuthor, newsDate FROM news WHERE id=:id',
            [':id' => $id]);
    }
    public function addOneNews($record)
    {
        $db = new Db();
        return $db->query('INSERT INTO news (newsText) VALUES (:record)',
            [':record' => $record]);
    }

    public function delOneNews($id)
    {
        $db = new Db();
        return $db->query('DELETE FROM news WHERE id=:id',
            [':id' => $id]);
    }
}