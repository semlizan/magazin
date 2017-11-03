<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Главная</title>

    <link rel="stylesheet" type="text/css" href="/css/template_styles.css" />
    <link rel="stylesheet" type="text/css" href="/css/top-menu.css" />
    <link rel="stylesheet" type="text/css" href="/css/content_main.css" />
    <link rel="stylesheet" type="text/css" href="/css/catalog.css" />

</head>
<body>

<!-- Header -->
<header class="header">
    <ul id="top-menu">
        <li><a href="/">Главная</a></li>
        <li><a href="#">Авторизация</a></li>
        <li><a href="#">Личный кабинет</a></li>
    </ul>

    <div id="logo"><a href="/" class="a-main">ШилоНаМыло</a></div>

    <ul id="top-menu">
        <li><a href="/catalog/">Женское</a></li>
        <li><a href="#">Мужское</a></li>
        <li><a href="#">Детское</a></li>
        <li><a href="#">Акции</a></li>
        <li><a href="#">О нас</a></li>
    </ul>

</header>
<!-- / Header -->

<div class="gap"></div>

<!-- Main Content -->
<main class="wrapper">
    <?php
    $controller = $this->controller->get_name_controller();
    include "application/views/$controller/$action.php";
    ?>
</main>
<!-- / Main Content -->

<div class="gap"></div>

<!-- Footer -->
<footer class="footer">
    8-800-555-35-35
</footer>
<!-- / Footer -->
</body>
</html>