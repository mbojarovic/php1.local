<?php

require __DIR__ . '/autoload.php';

$guestbook = new \App\Models\GuestBook;

    if (isset($_POST['record']) && $_POST['record'] != '') {
        $record = $_POST['record'];
    } else {
        $record = null;
    }
$guestbook->addOneRecord($record);


$view = new \App\View();
$view->assign('records', $guestbook->getAllRecords());
$view->display(__DIR__ . '/App/templates/guestbook.php');
?>