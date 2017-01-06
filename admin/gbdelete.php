<?php

require __DIR__ . '/../autoload.php';

$guestbook = new \App\Models\Guestbook;

$view = new \App\View();

if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    header('location: /admin/guestbook.php');
} else {
    $id = null;
}
echo $id;

$view->assign('gbdelete', $guestbook->delOneRecord($id));