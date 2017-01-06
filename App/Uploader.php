<?php
namespace App;
class Uploader
{
    protected $field;

    public function __construct()
    {
        $this->field = 'imagefile';
    }

    public function isUploaded() {
        if (!empty($_FILES)) {
            if (isset($_FILES[$this->field])) {
                if (0 == $_FILES[$this->field]['error']) {
                } else {
                    header('location: /admin/gallery.php');
                }
            } else {
                header('location: /admin/gallery.php');
            }
        } else {
            header('location: /admin/gallery.php');
        }
        return $this;
    }

    //todo check file size method

    public function rename_file_if_exist() {
        if (file_exists(__DIR__ . '/../uploads/' . $_FILES[$this->field]['name'])) {
            $str = 'abcdef' . mt_rand();
            $shuffled = str_shuffle($str);
            $e = explode ('/' , $_FILES[$this->field]['type']);
            $e = '.' .$e[1];
            copy(
                __DIR__ . '/../uploads/' . $_FILES[$this->field]['name'],
                __DIR__ . '/../uploads/' . $shuffled . $e
            );
        }
        return $this;
    }

    public function upload() {

        move_uploaded_file(
            $_FILES[$this->field]['tmp_name'],
            __DIR__ . '/../uploads/' . $_FILES[$this->field]['name']
        );

        $images = ['jpeg' => 'image/jpeg' , 'png' =>'image/png'];
        $x = mime_content_type(__DIR__ . '/../uploads/' . $_FILES[$this->field]['name']);

        if (!in_array($x, $images)) {
            unlink(__DIR__ . '/../uploads/'. $_FILES[$this->field]['name']);
            exit('запрещенный формат картинки. Только  JPEG и PNG. ');
        }

        require __DIR__ . '/Db.php';
        require __DIR__ . '/Models/Gallery.php';
        $image = new \App\Models\Gallery();
        $image->addOneImage($_FILES[$this->field]['name']);
        header('location: /admin/gallery.php');
    }
}

//$im = new \App\Models\Gallery();
//var_dump($ima);
$uploader = new Uploader;
$uploader->isUploaded()->rename_file_if_exist()->upload();