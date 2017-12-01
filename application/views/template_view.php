<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Главная</title>

    <link rel="stylesheet" type="text/css" href="/css/template_styles.css" />
    <link rel="stylesheet" type="text/css" href="/css/top-menu.css" />
    <link rel="stylesheet" type="text/css" href="/css/content_main.css" />
    <link rel="stylesheet" type="text/css" href="/css/catalog.css" />
    <link rel="stylesheet" type="text/css" href="/css/tovar.css" />
    <link rel="stylesheet" type="text/css" href="/css/registr.css" />
    <link rel="stylesheet" type="text/css" href="/css/table.css" />
    <link rel="stylesheet" type="text/css" href="/css/basket.css" />
    <link rel="stylesheet" type="text/css" href="/css/admin.css" />
    <link rel="stylesheet" type="text/css" href="/css/js.css" />

</head>
<body>

<!-- Header -->
<header class="header">
    <div class="lk">
        <ul class="user-menu-ul">
                <li class="user-menu-li">
                    <a href="/admin/admin_zakaz" class="header-lk">Администратор</a>
                        <ul class="user-sub-menu">
                            <li class="user-sub-menu-li"><a href="/admin/index" class="header-lk">Пользователи</a></li>
                            <li class="user-sub-menu-li"><a href="/admin/admin_zakaz" class="header-lk">Список заказов</a></li>
                            <li class="user-sub-menu-li"><a href="/admin/admin_tovar" class="header-lk">Товары</a></li>
                        </ul>
                </li>

                <li class="user-menu-li">
                    <a href="/user/LK" class="header-lk">Личный кабинет</a>
                    <ul class="user-sub-menu">
                        <li class="user-sub-menu-li"><a href="/user/history" class="header-lk">История заказов</a></li>
                        <li class="user-sub-menu-li"><a href="" class="header-lk">Выйти</a></li>
                    </ul>
                </li>

            <li class="user-menu-li">
                <a href="/user/registr" class="header-lk">Регистрация</a>
            </li>

            <li class="user-menu-li">
                <a href="/user/vxod" class="header-lk">Вход</a>
            </li>

            <li class="user-menu-li">
                <a href="/user/basket" class="header-lk">Корзина</a>
            </li>
        </ul>
</div>

    <div id="logo"><a href="/" class="a-main">ШилоНаМыло</a></div>
    <ul id="top-menu">
        <li><a href="/catalog/">Женское</a></li>
        <li><a href="/catalog/">Мужское</a></li>
        <li><a href="/catalog/">Детское</a></li>
        <li><a href="/catalog/">Акции</a></li>
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
    <div class="clear"></div>
</main>
<!-- / Main Content -->

<div class="gap"></div>
<div class="clear"></div>
<!-- Footer -->
<footer class="footer">
    8-800-555-35-35
</footer>
<!-- / Footer -->
</body>
</html>