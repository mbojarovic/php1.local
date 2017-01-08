<?php

require __DIR__ . '/../autoload.php';

$news = new \App\Models\News;
$view = new \App\View();

/*if (isset($_POST['aboutTitle']) && isset($_POST['aboutText'])) {
    $aboutTitle  = $_POST['aboutTitle'];
    $aboutText  = $_POST['aboutText'];
    header('location: /admin/about.php');
} else {
    $aboutTitle = null;
    $aboutText = null;
}*/

$view->assign('getnews', $news->getAllNews());

//$about->editAbout($aboutTitle, $aboutText);

$view->display(__DIR__ . '/../App/templates/admin/news.php');