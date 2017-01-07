<?php

require __DIR__ . '/autoload.php';

$news = new \App\Models\News;
$about = new \App\Models\About;

$view = new \App\View();

$view->assign('records', $news->getAllNews());
$view->assign('about', $about->getAbout());

$view->display(__DIR__ . '/App/templates/news.php');