<?php

require __DIR__ . '/../autoload.php';

$news = new \App\Models\News;

$view = new \App\View();

if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    header('location: /admin/news.php');
} else {
    $id = null;
}

$news->delOneNews($id);