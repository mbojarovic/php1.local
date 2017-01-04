<?php

require __DIR__ . '/autoload.php';

$about = new \App\Models\About;

$view = new \App\View();
$view->assign('about', $about->getAbout());
$view->display(__DIR__ . '/App/templates/about.php');