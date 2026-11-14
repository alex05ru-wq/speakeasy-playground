# SpeakEasy

Учебный сайт школы английского: WordPress-тема + установщик для локального сервера wp-playground.

## Состав

- `speakeasy-theme/` — тема WordPress (7 файлов: style.css, functions.php, index.php, header.php, footer.php, script.js, template-full-width.php)
- `speakeasy-theme.zip` — та же тема архивом (для установки через админку WordPress)
- `playground-loader.php` — установщик: активирует тему, создаёт страницы, меню, посты и курсы

## Локальный запуск

Сайт работает на wp-playground-cli (WSL2, порт 9400):

```bash
wsl -d Ubuntu bash /home/alex05ru/start-wp.sh
```

Установка темы на чистый сайт: скопировать `speakeasy-theme/` в `wp-content/themes/`, установщик положить в `wp-content/mu-plugins/_lib/` + обёртка `zz-restore.php` с `add_action('init', ...)`, затем открыть сайт один раз.

Подробности и бэкапы базы — в памятке `Documents\kimi\HANDOVER.md`.
