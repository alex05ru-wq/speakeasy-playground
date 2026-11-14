<?php
/**
 * Header темы SpeakEasy
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-inner">
        <a href="/" class="logo">Speak<span>Easy</span> <span class="accent">•</span></a>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Меню">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="main-nav" id="mainNav">
            <ul>
                <li><a href="#home" class="active">Главная</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#courses">Курсы</a></li>
                <li><a href="#pricing">Цены</a></li>
                <li><a href="#reviews">Отзывы</a></li>
                <li><a href="#blog">Блог</a></li>
                <li><a href="#contact">Контакты</a></li>
                <li><a href="#courses" class="cta-button">Записаться</a></li>
            </ul>
        </nav>
    </div>
</header>
