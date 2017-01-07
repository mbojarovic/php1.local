<?php

require __DIR__ . '/autoload.php';

$news = new \App\Models\News;
$about = new \App\Models\About;

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
} else {
    $id = null;
}

$view = new \App\View();
$view->assign('records', $news->getOneNews($id));
$view->assign('about', $about->getAbout());
$view->display(__DIR__ . '/App/templates/article.php');