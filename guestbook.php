<?php

require __DIR__ . '/autoload.php';

    if (isset($_POST['record'])) {
        $record = $_POST['record'];
    } else {
        $record = null;
    }

    $guestbook = new \App\Models\GuestBook;
/*    $guestbookrecord = new \App\Models\GuestBookRecord($record);
    $guestbook->append($guestbookrecord);
    $guestbook->save();*/
    //var_dump($guestbook->getAllRecords());

$view = new \App\View();
$view->display(__DIR__ . '/App/templates/guestbook.php');
?>