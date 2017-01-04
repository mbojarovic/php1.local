<?php

require __DIR__ . '/../autoload.php';

$about = new \App\Models\About;

$view = new \App\View();
$view->assign('getabout', $about->getAbout());
$view->display(__DIR__ . '/../App/templates/admin/about.php');