<?php
/**
 * Главный файл темы SpeakEasy
 */
get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Говори на английском <span>свободно</span></h1>
                <p>SpeakEasy — современные курсы английского языка с индивидуальным подходом. Преодолей языковой барьер и заговори уверенно уже через 3 месяца!</p>
                <div class="hero-buttons">
                    <a href="#courses" class="hero-cta">Выбрать курс</a>
                    <a href="#about" class="hero-secondary">Узнать больше</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <h2 class="section-title">О SpeakEasy</h2>
            <p class="section-subtitle">Мы помогаем людям говорить на английском уверенно, без страха и стеснения</p>
            <div class="about-grid">
                <div class="about-image">🌍</div>
                <div class="about-text">
                    <h3>Ваш путь к свободному английскому</h3>
                    <p>SpeakEasy — это не просто курсы английского. Мы создали среду, в которой вы естественно погружаетесь в язык через живые диалоги, современные материалы и реальные ситуации.</p>
                    <p>Наши преподаватели — носители языка и сертифицированные специалисты с опытом работы от 5 лет. Каждый студент получает индивидуальный план обучения, составленный с учётом его целей и уровня.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Студентов</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Довольны</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4.9★</div>
                            <div class="stat-label">Рейтинг</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="section section-light" id="courses">
        <div class="container">
            <h2 class="section-title">Наши курсы</h2>
            <p class="section-subtitle">Выберите подходящий курс и начните свой путь к свободному английскому</p>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-icon">🌱</div>
                    <span class="course-level">Beginner</span>
                    <h3>Английский с нуля</h3>
                    <p>Идеальный старт для тех, кто никогда не изучал английский или хочет начать с самых основ.</p>
                    <div class="course-price">9 900 ₽ <span>/ мес</span></div>
                    <button class="cta-button enroll-btn" data-course="Английский с нуля">Записаться</button>
                </div>
                <div class="course-card">
                    <div class="course-icon">📈</div>
                    <span class="course-level">Intermediate</span>
                    <h3>Разговорный интенсив</h3>
                    <p>Для тех, кто хочет преодолеть языковой барьер и начать свободно общаться на английском.</p>
                    <div class="course-price">12 900 ₽ <span>/ мес</span></div>
                    <button class="cta-button enroll-btn" data-course="Разговорный интенсив">Записаться</button>
                </div>
                <div class="course-card">
                    <div class="course-icon">💼</div>
                    <span class="course-level">Advanced</span>
                    <h3>Бизнес-английский</h3>
                    <p>Для профессионалов, которым нужен английский для переговоров, презентаций и деловой переписки.</p>
                    <div class="course-price">15 900 ₽ <span>/ мес</span></div>
                    <button class="cta-button enroll-btn" data-course="Бизнес-английский">Записаться</button>
                </div>
                <div class="course-card">
                    <div class="course-icon">🎓</div>
                    <span class="course-level">Все уровни</span>
                    <h3>Подготовка к IELTS</h3>
                    <p>Интенсивная подготовка к международному экзамену IELTS. Средний балл наших студентов — 7.5.</p>
                    <div class="course-price">18 900 ₽ <span>/ мес</span></div>
                    <button class="cta-button enroll-btn" data-course="Подготовка к IELTS">Записаться</button>
                </div>
                <div class="course-card">
                    <div class="course-icon">👶</div>
                    <span class="course-level">Kids</span>
                    <h3>Английский для детей</h3>
                    <p>Увлекательные занятия для детей от 6 до 14 лет. Игровая форма, современные методики.</p>
                    <div class="course-price">7 900 ₽ <span>/ мес</span></div>
                    <button class="cta-button enroll-btn" data-course="Английский для детей">Записаться</button>
                </div>
                <div class="course-card">
                    <div class="course-icon">🎯</div>
                    <span class="course-level">Индивидуально</span>
                    <h3>Индивидуальные занятия</h3>
                    <p>Персональная программа с преподавателем 1 на 1. Максимальное внимание вашим целям.</p>
                    <div class="course-price">2 500 ₽ <span>/ урок</span></div>
                    <button class="cta-button enroll-btn" data-course="Индивидуальные занятия">Записаться</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section" id="pricing">
        <div class="container">
            <h2 class="section-title">Тарифы</h2>
            <p class="section-subtitle">Выберите формат обучения, который подходит именно вам</p>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-name">Базовый</div>
                    <div class="pricing-desc">Самостоятельное обучение</div>
                    <div class="pricing-amount">3 900 ₽</div>
                    <div class="pricing-period">в месяц</div>
                    <ul class="pricing-features">
                        <li>Доступ к платформе 24/7</li>
                        <li>Видеоуроки и материалы</li>
                        <li>Тесты и задания</li>
                        <li>Чат с сообществом</li>
                        <li>Еженедельные вебинары</li>
                    </ul>
                    <button class="cta-button enroll-btn" data-course="Базовый тариф">Выбрать</button>
                </div>
                <div class="pricing-card featured">
                    <div class="badge">Популярный</div>
                    <div class="pricing-name">Стандарт</div>
                    <div class="pricing-desc">Занятия в группе</div>
                    <div class="pricing-amount">9 900 ₽</div>
                    <div class="pricing-period">в месяц</div>
                    <ul class="pricing-features">
                        <li>Всё из Базового</li>
                        <li>8 групповых занятий</li>
                        <li>Разговорный клуб</li>
                        <li>Проверка домашних заданий</li>
                        <li>Личный куратор</li>
                        <li>Сертификат по окончании</li>
                    </ul>
                    <button class="cta-button enroll-btn" data-course="Стандарт тариф">Выбрать</button>
                </div>
                <div class="pricing-card">
                    <div class="pricing-name">Премиум</div>
                    <div class="pricing-desc">Индивидуальное обучение</div>
                    <div class="pricing-amount">19 900 ₽</div>
                    <div class="pricing-period">в месяц</div>
                    <ul class="pricing-features">
                        <li>Всё из Стандарта</li>
                        <li>8 индивидуальных занятий</li>
                        <li>Персональный план обучения</li>
                        <li>24/7 поддержка преподавателя</li>
                        <li>Разговор с носителем языка</li>
                        <li>Приоритетная запись</li>
                    </ul>
                    <button class="cta-button enroll-btn" data-course="Премиум тариф">Выбрать</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section section-light" id="reviews">
        <div class="container">
            <h2 class="section-title">Отзывы студентов</h2>
            <p class="section-subtitle">Более 500 студентов уже заговорили на английском благодаря SpeakEasy</p>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">"До SpeakEasy я учил английский 5 лет в школе и 2 года в университете, но не мог связать двух слов. Через 3 месяца интенсивного курса я поехал в отпуск и свободно общался! Невероятный результат."</div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">А</div>
                        <div>
                            <div class="testimonial-name">Алексей</div>
                            <div class="testimonial-role">Менеджер, 2 месяца обучения</div>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">"SpeakEasy изменил мою карьеру! После курса бизнес-английского я провел первую презентацию для иностранных партнеров самостоятельно. Руководство оценило, и меня повысили!"</div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">Е</div>
                        <div>
                            <div class="testimonial-name">Елена</div>
                            <div class="testimonial-role">Финансовый аналитик, 4 месяца</div>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">"Очень рада, что выбрала SpeakEasy для своего сына. Ребёнок ждёт каждое занятие с нетерпением, а раньше английский был наказанием. Уже через полгода начал читать книги в оригинале!"</div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">М</div>
                        <div>
                            <div class="testimonial-name">Марина</div>
                            <div class="testimonial-role">Мама ученика, 6 месяцев</div>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">"Готовился к IELTS всего 2 месяца и сдал на 7.5! Преподаватели — настоящие профи, которые знают все ловушки экзамена. Отдельное спасибо за разговорный клуб — это лучшее, что было на курсе."</div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">Д</div>
                        <div>
                            <div class="testimonial-name">Дмитрий</div>
                            <div class="testimonial-role">Студент IELTS, 2 месяца</div>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="section" id="blog">
        <div class="container">
            <h2 class="section-title">Блог SpeakEasy</h2>
            <p class="section-subtitle">Полезные статьи, советы и лайфхаки для изучения английского языка</p>
            <div class="blog-grid">
                <div class="blog-card">
                    <div class="blog-image">📝</div>
                    <div class="blog-body">
                        <div class="blog-category">Советы</div>
                        <h3>10 способов учить английский каждый день</h3>
                        <p>Как превратить изучение английского в привычку и не пропускать занятия. Простые советы для занятых людей.</p>
                        <div class="blog-meta">
                            <span>📅 5 ноя 2026</span>
                            <span>👁 1 234</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-image">🌍</div>
                    <div class="blog-body">
                        <div class="blog-category">Лайфхаки</div>
                        <h3>Как преодолеть языковой барьер за 30 дней</h3>
                        <p>Пошаговая стратегия, которая поможет вам начать говорить на английском без страха и стеснения.</p>
                        <div class="blog-meta">
                            <span>📅 28 окт 2026</span>
                            <span>👁 2 567</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-image">🎓</div>
                    <div class="blog-body">
                        <div class="blog-category">Экзамены</div>
                        <h3>IELTS 2026: всё, что нужно знать</h3>
                        <p>Полный гайд по подготовке к IELTS: структура, критерии оценки, ловушки и секреты высоких баллов.</p>
                        <div class="blog-meta">
                            <span>📅 15 окт 2026</span>
                            <span>👁 3 890</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Получите бесплатный урок</h2>
            <p>Подпишитесь на рассылку и получите пробное занятие в подарок</p>
            <form class="newsletter-form" id="newsletter-form">
                <input type="email" placeholder="Введите ваш email" required>
                <button type="submit">Получить урок</button>
            </form>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section section-light" id="contact">
        <div class="container">
            <h2 class="section-title">Свяжитесь с нами</h2>
            <p class="section-subtitle">Остались вопросы? Мы с радостью поможем вам выбрать подходящий курс</p>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Наши контакты</h3>
                    <p>Мы всегда на связи и готовы ответить на ваши вопросы. Вы можете написать нам, позвонить или прийти в гости.</p>
                    <ul class="contact-details">
                        <li>
                            <span class="contact-icon">📍</span>
                            <span>г. Москва, ул. Тверская, д. 15, офис 304</span>
                        </li>
                        <li>
                            <span class="contact-icon">📞</span>
                            <span>+7 (495) 123-45-67</span>
                        </li>
                        <li>
                            <span class="contact-icon">✉️</span>
                            <span>hello@speakeasy.ru</span>
                        </li>
                        <li>
                            <span class="contact-icon">🕐</span>
                            <span>Пн-Пт: 9:00–21:00, Сб-Вс: 10:00–18:00</span>
                        </li>
                    </ul>
                    <div class="social-links">
                        <a href="#" class="social-link">📱</a>
                        <a href="#" class="social-link">💬</a>
                        <a href="#" class="social-link">▶️</a>
                        <a href="#" class="social-link">📷</a>
                    </div>
                </div>
                <div class="contact-form" id="contactForm">
                    <h3 style="font-family: var(--font-heading); margin-bottom: 20px;">Напишите нам</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input type="text" id="name" placeholder="Иван" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="ivan@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="tel" id="phone" placeholder="+7 (999) 123-45-67">
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea id="message" placeholder="Расскажите, что вас интересует..." required></textarea>
                        </div>
                        <button type="submit" class="form-submit">Отправить сообщение</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Enroll Modal -->
<div class="modal-overlay" id="enrollModal">
    <div class="modal">
        <button class="modal-close" id="modalClose">&times;</button>
        <h2>Запись на курс</h2>
        <p id="modalCourse">Заполните форму для записи на выбранный курс</p>
        <form id="enrollForm">
            <div class="form-group">
                <label for="enroll-name">Ваше имя</label>
                <input type="text" id="enroll-name" required>
            </div>
            <div class="form-group">
                <label for="enroll-email">Email</label>
                <input type="email" id="enroll-email" required>
            </div>
            <div class="form-group">
                <label for="enroll-phone">Телефон</label>
                <input type="tel" id="enroll-phone" required>
            </div>
            <div class="form-group">
                <label>Способ оплаты</label>
                <div class="payment-methods">
                    <button type="button" class="payment-method active" data-payment="card">💳 Карта</button>
                    <button type="button" class="payment-method" data-payment="yoomoney">💰 ЮMoney</button>
                    <button type="button" class="payment-method" data-payment="cash">🏦 Наличные</button>
                </div>
            </div>
            <div class="payment-details" id="cardDetails">
                <div class="form-group">
                    <label>Номер карты</label>
                    <input type="text" placeholder="0000 0000 0000 0000">
                </div>
            </div>
            <button type="submit" class="form-submit">Записаться и оплатить</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>
