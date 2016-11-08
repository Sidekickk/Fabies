<!DOCTYPE html>
<html>
<head>
    <!--    <title></title>-->
            <!-- Styles -->
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/lightbox.css">


    <link rel="stylesheet" href="../CSS/hover.css" media="all">
    <link rel="stylesheet" href="../CSS/pagesStyle/gallery.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/startPage.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/faq.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/categoriesAndPrices.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/contacts.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/footer.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/aboutUs.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/controlPoints.css">
    <link rel="stylesheet" href="../CSS/pagesStyle/header.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <meta charset="UTF-8">
</head>
    <body>
        <script src="../JavaScript/jquery.js"></script>
        <script src="../JavaScript/bootstrap.min.js"></script>
        <script src="../JavaScript/navBarActivation.js"></script>

        <div id="wrapper">

                <img src="../Resources/logo.png" id="logo">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav nav-tabs">
                        <li class="active"><a href="index.php">Начало</a></li>
                        <li><a href="aboutUs.php">За Нас</a></li>
                        <li><a href="contacts.php">Контакти</a></li>
                        <li><a href="gallery.php">Автопарк</a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Полезна информация <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="categoriesAndPrices.php">Курсове и Цени</a></li>
                                <li><a href="faq.php">Често задавани въпроси</a></li>
                                <li><a href="#">Листовки On-line</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="controlPoints.php">Контролни точки</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="holder">
                <?php
                include_once('index.php');
                ?>
            </div>

            <?php
            include_once('./footer.php');
            ?>
        </div>
    </body>
</html>
