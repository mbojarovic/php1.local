<?php

require __DIR__ . '/../autoload.php';

$news = new \App\Models\News;
$view = new \App\View();

if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    //header('location: /admin/news.php');
} else {
    $id = null;
}

$view->assign('getnews', $news->getOneNews($id));

if (isset($_GET['id']) && isset($_POST['newsTitle']) && isset($_POST['newsText'])
    && isset($_POST['newsAuthor']) && isset($_POST['newsDate'])) {
    $id  = (int)$_GET['id'];
    $newsTitle  = $_POST['newsTitle'];
    $newsText  = $_POST['newsText'];
    $newsAuthor  = $_POST['newsAuthor'];
    $newsDate  = $_POST['newsDate'];
    header('location: /admin/news.php');
} else {
    $id = null;
    $newsTitle = null;
    $newsText = null;
    $newsAuthor = null;
    $newsDate = null;
}

//$view->assign('getnews', $news->getAllNews())

var_dump($_POST);
var_dump($_GET);
$news->updateNews($id, $newsTitle, $newsText, $newsAuthor, $newsDate);

$view->display(__DIR__ . '/../App/templates/admin/newsupdate.php');