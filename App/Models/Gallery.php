<?php

namespace App\Models;

use App\Db;

class Gallery
{
    protected $data;
    protected $images = [];

    public function getAllImages()
    {
        $db = new Db();
        $this->data = $db->query('SELECT id, images FROM gallery ORDER BY id DESC');

        foreach ($this->data as $image) {
            $this->images[] = new GalleryImage($image->id, $image->images);
        }
        return $this->images;

    }

    public function getOneImage(int $id)
    {
        //return self::getAllImages()[$id -1];

        $db = new Db();
        return $db->query('SELECT * FROM gallery WHERE id=:id',
            [':id' => $id]);
    }

    public function addOneImage($image)
    {
        $db = new Db();
        return $db->query('INSERT INTO gallery (images) VALUES (:image)',
            [':image' => $image]);
    }
}