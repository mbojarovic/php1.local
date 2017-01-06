<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 1/6/2017
 * Time: 3:24 PM
 */

namespace App\Models;


class GalleryImage
{
    protected $id;
    protected $image;

    function __construct($id, $image)
    {
        $this->id = $id;
        $this->image = $image;
    }

    public function getImageId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }
}