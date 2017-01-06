<?php

require __DIR__ . '/../autoload.php';

$guestbook = new \App\Models\Guestbook;

$view = new \App\View();
$view->assign('getguestbook', $guestbook->getAllRecords());
$view->display(__DIR__ . '/../App/templates/admin/guestbook.php');