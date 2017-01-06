<?php

require __DIR__ . '/autoload.php';



$gallery = new \App\Models\Gallery;

$view = new \App\View();
$view->assign('images', $gallery->getAllImages());
$view->display(__DIR__ . '/App/templates/gallery.php');