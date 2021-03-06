<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/App/templates/favicon/favicon.ico">

    <title>класс Uploader.</title>

    <!-- Bootstrap core CSS -->
    <link href="/App/templates/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/App/templates/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/App/templates/styles/main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/App/templates/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/App/templates/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item" href="/admin/about.php">Обо мне</a>
            <a class="blog-nav-item active" href="/admin/gallery.php">Фотогалерея</a>
            <a class="blog-nav-item" href="/admin/guestbook.php">Гостевая книга</a>
            ||<a class="blog-nav-item" href="/admin/index.php">Админ-панель</a>
            <a class="blog-nav-item" href="/index.php">Вернуться на главную</a>
        </nav>
    </div>
</div>

<div class="container">
    <hr>

        <form action="/App/Uploader.php" method="post" enctype="multipart/form-data">
            <input type="file" name="imagefile">
            <input type="submit" value="загрузить">
        </form>

<hr>

    <div class="row">

        <?php foreach ($images as $image): ?>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img style="width: 200px; height: 200px" img src="/uploads/<?php echo $image->getImage();?>" alt="">
                </a>
            </div>
        <?php endforeach; ?>

</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">

    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/App/templates/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/App/templates/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/App/templates/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
