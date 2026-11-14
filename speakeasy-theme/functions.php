<?php
/**
 * Functions темы SpeakEasy
 */

// Подключаем стили и скрипты
function speakeasy_scripts() {
    wp_enqueue_style('speakeasy-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('speakeasy-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'speakeasy_scripts');

// Регистрируем меню
function speakeasy_menus() {
    register_nav_menu('primary', 'Главное меню');
}
add_action('after_setup_theme', 'speakeasy_menus');

// Добавляем поддержку миниатюр
add_theme_support('post-thumbnails');

// Добавляем custom post type для курсов
function speakeasy_register_courses() {
    register_post_type('course', array(
        'labels' => array(
            'name' => 'Курсы',
            'singular_name' => 'Курс',
            'add_new' => 'Добавить курс',
            'add_new_item' => 'Новый курс',
            'edit_item' => 'Редактировать курс',
            'view_item' => 'Просмотр курса',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    ));

    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Отзывы',
            'singular_name' => 'Отзыв',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'speakeasy_register_courses');
