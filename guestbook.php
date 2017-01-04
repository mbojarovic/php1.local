<?php

require __DIR__ . '/autoload.php';

$guestbook = new \App\Models\GuestBook;

    if (isset($_POST['record'])) {
        $record = $_POST['record'];
    } else {
        $record = null;
    }

//$guestbook->append($record1);

/*    $guestbookrecord = new \App\Models\GuestBookRecord($record);
    $guestbook->append($guestbookrecord);
    $guestbook->save();*/
    //var_dump($_POST['record']);
$guestbook->addOneRecord($record);


$view = new \App\View();
$view->assign('records', $guestbook->getAllRecords());
$view->display(__DIR__ . '/App/templates/guestbook.php');
?>