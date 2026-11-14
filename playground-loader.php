<?php
/**
 * File: playground-loader.php
 * Этот файл нужно загрузить на WordPress Playground, чтобы активировать тему
 * и наполнить сайт контентом.
 */

// === 1. Активируем тему ===
switch_theme('speakeasy-theme');

// === 2. Создаём страницы ===
$pages = array(
    'home' => array(
        'title' => 'Главная',
        'content' => '',
    ),
    'about' => array(
        'title' => 'О нас',
        'content' => '<!-- wp:paragraph --><p>SpeakEasy — это современные курсы английского языка с индивидуальным подходом. Мы помогаем людям преодолеть языковой барьер и заговорить уверенно.</p><!-- /wp:paragraph -->',
    ),
    'courses' => array(
        'title' => 'Курсы',
        'content' => '<!-- wp:paragraph --><p>Наши курсы английского языка для любого уровня.</p><!-- /wp:paragraph -->',
    ),
    'pricing' => array(
        'title' => 'Цены',
        'content' => '<!-- wp:paragraph --><p>Выберите подходящий тариф обучения.</p><!-- /wp:paragraph -->',
    ),
    'blog' => array(
        'title' => 'Блог',
        'content' => '<!-- wp:paragraph --><p>Полезные статьи об изучении английского языка.</p><!-- /wp:paragraph -->',
    ),
    'contact' => array(
        'title' => 'Контакты',
        'content' => '<!-- wp:paragraph --><p>Свяжитесь с нами любым удобным способом.</p><!-- /wp:paragraph -->',
    ),
    'reviews' => array(
        'title' => 'Отзывы',
        'content' => '<!-- wp:paragraph --><p>Что говорят наши студенты.</p><!-- /wp:paragraph -->',
    ),
);

foreach ($pages as $slug => $page_data) {
    $existing = get_page_by_path($slug);
    if (!$existing) {
        wp_insert_post(array(
            'post_title' => $page_data['title'],
            'post_content' => $page_data['content'],
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => $slug,
        ));
    }
}

// === 3. Настраиваем меню ===
$menu_name = 'Главное меню';
$menu_exists = wp_get_nav_menu_object($menu_name);
if (!$menu_exists) {
    $menu_id = wp_create_nav_menu($menu_name);
    
    $menu_items = array(
        'home' => 'Главная',
        'about' => 'О нас',
        'courses' => 'Курсы',
        'pricing' => 'Цены',
        'reviews' => 'Отзывы',
        'blog' => 'Блог',
        'contact' => 'Контакты',
    );
    
    foreach ($menu_items as $slug => $title) {
        $page = get_page_by_path($slug);
        if ($page) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $title,
                'menu-item-object-id' => $page->ID,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish',
            ));
        }
    }
    
    // Устанавливаем меню в primary location
    set_theme_mod('nav_menu_locations', array('primary' => $menu_id));
}

// === 4. Создаём демо-посты в блог ===
$posts = array(
    array(
        'title' => '10 способов учить английский каждый день',
        'content' => 'Как превратить изучение английского в привычку? Вот 10 простых способов...',
        'category' => 'Советы',
    ),
    array(
        'title' => 'Как преодолеть языковой барьер за 30 дней',
        'content' => 'Пошаговая стратегия, которая поможет начать говорить на английском без страха.',
        'category' => 'Лайфхаки',
    ),
    array(
        'title' => 'IELTS 2026: всё, что нужно знать',
        'content' => 'Полный гайд по подготовке к IELTS: структура, критерии оценки и секреты успеха.',
        'category' => 'Экзамены',
    ),
);

foreach ($posts as $post_data) {
    wp_insert_post(array(
        'post_title' => $post_data['title'],
        'post_content' => $post_data['content'],
        'post_status' => 'publish',
        'post_type' => 'post',
        'tags_input' => array($post_data['category']),
    ));
}

// === 5. Создаём курсы ===
$courses = array(
    array('name' => 'Английский с нуля', 'desc' => 'Идеальный старт для тех, кто никогда не изучал английский.'),
    array('name' => 'Разговорный интенсив', 'desc' => 'Для тех, кто хочет преодолеть языковой барьер.'),
    array('name' => 'Бизнес-английский', 'desc' => 'Для профессионалов и делового общения.'),
    array('name' => 'Подготовка к IELTS', 'desc' => 'Интенсивная подготовка к международному экзамену.'),
    array('name' => 'Английский для детей', 'desc' => 'Увлекательные занятия для детей от 6 до 14 лет.'),
    array('name' => 'Индивидуальные занятия', 'desc' => 'Персональная программа 1 на 1 с преподавателем.'),
);

foreach ($courses as $course) {
    wp_insert_post(array(
        'post_title' => $course['name'],
        'post_content' => $course['desc'],
        'post_status' => 'publish',
        'post_type' => 'course',
    ));
}

// Устанавливаем главную страницу
$homepage = get_page_by_path('home');
if ($homepage) {
    update_option('page_on_front', $homepage->ID);
    update_option('show_on_front', 'page');
}

echo '✅ SpeakEasy успешно установлен! Тема активирована, контент создан.';
