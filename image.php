<?php

require __DIR__ . '/autoload.php';

$imageone = new \App\Models\Gallery;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = null;
}
$id = $_GET['id'];


$view = new \App\View();
$view->assign('image', $imageone->getOneImage($id));
$view->display(__DIR__ . '/App/templates/galleryoneimage.php');