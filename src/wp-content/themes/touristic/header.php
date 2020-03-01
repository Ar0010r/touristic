<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная страница</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><div><img src="img/logo.svg" alt="Логотип"
                                                                        class="logo-wrap__logo-img"></div></div>
                </div>
                <nav class="main-navigation">
                    <?php $menu = wp_get_nav_menu_items('nav'); ?>
                    <ul class="nav-list">
                        <?php foreach ($menu as $page) : ?>
                            <li class="nav-list__nav-item">
                                <a href="<?php echo $page->url ?>"
                                   class="nav-list__nav-item__nav-link"><?php echo $page->post_title ?></a>
                            </li>
                        <?php endforeach; ?>
                        <!--<li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Полезная
                                информация</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Последние
                                акции</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">О сервисе</a>
                        </li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Новости</a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form class="search-form" method="get" action="/touristic/src">
                    <input type="text" placeholder="Поиск..." class="search-form__input" name="s" id="s">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>