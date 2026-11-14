// Скрипты SpeakEasy
(function() {
    'use strict';

    // Мобильное меню
    const mobileToggle = document.getElementById('mobileToggle');
    const mainNav = document.getElementById('mainNav');
    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
        });
    }

    // Закрытие меню при клике на ссылку
    document.querySelectorAll('.main-nav a').forEach(function(link) {
        link.addEventListener('click', function() {
            if (mainNav) mainNav.classList.remove('active');
        });
    });

    // Плавный скролл
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Активная секция в меню при скролле
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.main-nav a');

    function updateActiveSection() {
        let current = '';
        sections.forEach(function(section) {
            const top = section.offsetTop - 150;
            if (window.scrollY >= top) {
                current = section.getAttribute('id');
            }
        });
        navLinks.forEach(function(link) {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', updateActiveSection);

    // === МОДАЛЬНОЕ ОКНО ЗАПИСИ ===
    const modal = document.getElementById('enrollModal');
    const modalClose = document.getElementById('modalClose');
    const modalCourse = document.getElementById('modalCourse');

    // Кнопки "Записаться" на курсах и тарифах
    document.querySelectorAll('.enroll-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const courseName = this.getAttribute('data-course');
            if (modalCourse) {
                modalCourse.textContent = 'Запись на курс: «' + courseName + '»';
            }
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // Закрытие модалки
    function closeModal() {
        if (modal) {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (modalClose) modalClose.addEventListener('click', closeModal);
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeModal();
        });
    }

    // === ПЕРЕКЛЮЧЕНИЕ СПОСОБОВ ОПЛАТЫ ===
    const paymentMethods = document.querySelectorAll('.payment-method');
    const cardDetails = document.getElementById('cardDetails');

    paymentMethods.forEach(function(btn) {
        btn.addEventListener('click', function() {
            paymentMethods.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            if (cardDetails) {
                cardDetails.style.display = this.getAttribute('data-payment') === 'card' ? 'block' : 'none';
            }
        });
    });

    // === ОБРАБОТКА ФОРМ ===
    // Функция показа уведомления
    function showNotification(message, type) {
        const notif = document.createElement('div');
        notif.className = 'notification ' + type;
        notif.textContent = message;
        document.body.appendChild(notif);
        
        setTimeout(function() {
            notif.classList.add('show');
        }, 100);

        setTimeout(function() {
            notif.classList.remove('show');
            setTimeout(function() { notif.remove(); }, 400);
        }, 4000);
    }

    // Форма записи на курс
    const enrollForm = document.getElementById('enrollForm');
    if (enrollForm) {
        enrollForm.addEventListener('submit', function(e) {
            e.preventDefault();
            closeModal();
            showNotification('✅ Спасибо! Мы свяжемся с вами в ближайшее время для подтверждения записи.', 'success');
            this.reset();
        });
    }

    // Контактная форма
    const contactForm = document.querySelector('#contactForm form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            showNotification('✅ Сообщение отправлено! Мы ответим вам в ближайшее время.', 'success');
            this.reset();
        });
    }

    // Форма подписки на новости
    const newsletterForm = document.getElementById('newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            showNotification('🎉 Спасибо за подписку! Пробный урок уже ждёт вас на почте.', 'success');
            this.reset();
        });
    }

})();
