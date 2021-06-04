<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

/* Dashboard */
define('CMTX_MENU_TITLE_DASHBOARD', 'Панель управления');
/* Manage */ 
define('CMTX_MENU_TITLE_MANAGE', 'Управление');
define('CMTX_MENU_MANAGE_COMMENTS', 'Комментарии');
define('CMTX_MENU_MANAGE_PAGES', 'Страницы');
define('CMTX_MENU_MANAGE_ADMINS', 'Администраторы');
define('CMTX_MENU_MANAGE_BANS', 'Запреты');
define('CMTX_MENU_MANAGE_SUBSCRIBERS', 'Подписчики');
/* Layout */ 
define('CMTX_MENU_TITLE_LAYOUT', 'Внешний вид');
define('CMTX_MENU_LAYOUT_ORDER', 'Очередность частей');
define('CMTX_MENU_LAYOUT_COMMENTS', 'Комментарии');
define('CMTX_MENU_LAYOUT_COMMENTS_ENABLED', 'Включение полей');
define('CMTX_MENU_LAYOUT_COMMENTS_GENERAL', 'Основные функции');
define('CMTX_MENU_LAYOUT_COMMENTS_PAGINATION', 'Отображение Страниц');
define('CMTX_MENU_LAYOUT_COMMENTS_SORT_BY', 'Отображение Сортировки');
define('CMTX_MENU_LAYOUT_COMMENTS_REPLIES', 'Отображение Ответов');
define('CMTX_MENU_LAYOUT_COMMENTS_SOCIAL', ' Соц. сети');
define('CMTX_MENU_LAYOUT_COMMENTS_GRAVATAR', 'Gravatar (Граватар)');
define('CMTX_MENU_LAYOUT_COMMENTS_READ_MORE', 'Подробнее');
define('CMTX_MENU_LAYOUT_FORM', 'Форма');
define('CMTX_MENU_LAYOUT_FORM_ENABLED', 'Включение полей');
define('CMTX_MENU_LAYOUT_FORM_REQUIRED', 'Обязательные поля');
define('CMTX_MENU_LAYOUT_FORM_DEFAULTS', 'По умолчанию');
define('CMTX_MENU_LAYOUT_FORM_GENERAL', 'Основные функции');
define('CMTX_MENU_LAYOUT_FORM_MAXIMUMS', 'Максимумы');
define('CMTX_MENU_LAYOUT_FORM_SORT_ORDER', 'Порядок Сортировки');
define('CMTX_MENU_LAYOUT_FORM_SORT_ORDER_FIELDS', 'Поля');
define('CMTX_MENU_LAYOUT_FORM_SORT_ORDER_BUTTONS', 'Кнопки');
define('CMTX_MENU_LAYOUT_FORM_BB_CODE', 'BB Код');
define('CMTX_MENU_LAYOUT_FORM_SMILIES', 'Смайлики');
define('CMTX_MENU_LAYOUT_FORM_QUESTIONS', 'Контрольные Вопросы');
define('CMTX_MENU_LAYOUT_FORM_CAPTCHAS', 'Капчи');
define('CMTX_MENU_LAYOUT_FORM_CAPTCHAS_SECURIMAGE', 'Securimage');
define('CMTX_MENU_LAYOUT_FORM_CAPTCHAS_RECAPTCHA', 'ReCaptcha');
define('CMTX_MENU_LAYOUT_FORM_STATES', 'Статус полей');
define('CMTX_MENU_LAYOUT_POWERED', 'Powered by ');
/* Settings */ 
define('CMTX_MENU_TITLE_SETTINGS', 'Настройки');
define('CMTX_MENU_TITLE_SETTINGS_ADMINISTRATOR', 'Администратор');
define('CMTX_MENU_TITLE_SETTINGS_ADMIN_DETECTION', 'Обнаружение Администратора');
define('CMTX_MENU_TITLE_SETTINGS_AKISMET', 'Akismet');
define('CMTX_MENU_TITLE_SETTINGS_APPROVAL', 'Одобрения');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL', 'E-mail');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_SETUP', 'Настройка');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR', 'Редактор');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_USER', 'Пользователь');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_USER_SUBSCRIBER_CONFIRMATION', 'Подтверждение для подписчиков');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_USER_SUBSCRIBER_NOTIFICATION', 'Уведомление для подписчиков');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_ADMIN', 'Администратор');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_ADMIN_EMAIL_TEST', 'Тест E-mail');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_ADMIN_NEW_BAN', 'Новый запрет');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_ADMIN_NEW_COMMENT_APPROVE', 'Новый Комментарий: Одобрять');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_ADMIN_NEW_COMMENT_OKAY', 'Новый Комментарий: без одобрения');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_ADMIN_NEW_FLAG', 'Новая жалоба');
define('CMTX_MENU_TITLE_SETTINGS_EMAIL_EDITOR_ADMIN_RESET_PASSWORD', 'Сменить Пароль');
define('CMTX_MENU_TITLE_SETTINGS_ERROR_REPORTING', 'Отчет об ошибках');
define('CMTX_MENU_TITLE_SETTINGS_FLAGGING', 'Жалобы');
define('CMTX_MENU_TITLE_SETTINGS_FLOODING', 'Флуд');
define('CMTX_MENU_TITLE_SETTINGS_LANGUAGE', 'Выбор языка');
define('CMTX_MENU_TITLE_SETTINGS_MAINTENANCE', 'Обслуживание');
define('CMTX_MENU_TITLE_SETTINGS_PROCESSOR', 'Процессор');
define('CMTX_MENU_TITLE_SETTINGS_PROCESSOR_NAME', 'Имя');
define('CMTX_MENU_TITLE_SETTINGS_PROCESSOR_EMAIL', 'E-mail');
define('CMTX_MENU_TITLE_SETTINGS_PROCESSOR_TOWN', 'Город');
define('CMTX_MENU_TITLE_SETTINGS_PROCESSOR_WEBSITE', 'Web-сайт');
define('CMTX_MENU_TITLE_SETTINGS_PROCESSOR_COMMENT', 'Комментарий');
define('CMTX_MENU_TITLE_SETTINGS_RICH_SNIPPETS', 'Улучшенный сниппет');
define('CMTX_MENU_TITLE_SETTINGS_RSS', 'RSS-канал');
define('CMTX_MENU_TITLE_SETTINGS_SECURITY', 'Безопасность');
define('CMTX_MENU_TITLE_SETTINGS_SYSTEM', 'Система');
define('CMTX_MENU_TITLE_SETTINGS_VIEWERS', 'Посетители');
/* Tasks */
define('CMTX_MENU_TITLE_TASKS', 'Задачи');
define('CMTX_MENU_TITLE_TASK_DELETE_BANS', 'Удаление банов');
define('CMTX_MENU_TITLE_TASK_DELETE_REPORTERS', 'Удаление комментариев');
define('CMTX_MENU_TITLE_TASK_DELETE_SUBSCRIBERS', 'Удаление подписчиков');
define('CMTX_MENU_TITLE_TASK_DELETE_VOTERS', 'Удаление голосований');
/* Reports */
define('CMTX_MENU_TITLE_REPORTS', 'Отчеты');
define('CMTX_MENU_TITLE_REPORT_ACCESS', 'Просмотр функций');
define('CMTX_MENU_TITLE_REPORT_PERMISSIONS', 'Свойства файлов');
define('CMTX_MENU_TITLE_REPORT_PHPINFO', 'PHP Инфо');
define('CMTX_MENU_TITLE_REPORT_VERSION', 'Версия');
define('CMTX_MENU_TITLE_REPORT_VIEWERS', 'Посетители');
/* Tools */
define('CMTX_MENU_TITLE_TOOLS', 'Инструменты');
define('CMTX_MENU_TITLE_TOOLS_DB_BACKUP', 'Backup Базы данных ');
define('CMTX_MENU_TITLE_TOOLS_OPTIMIZE_TABLES', 'Оптимизация Таблиц');
define('CMTX_MENU_TITLE_TOOLS_TEXT_FINDER', 'Поиск текста');
/* Help */
define('CMTX_MENU_TITLE_HELP', 'Помощь');
define('CMTX_MENU_TITLE_HELP_FAQ', 'FAQ');
define('CMTX_MENU_TITLE_HELP_FORUM', 'Форум');
define('CMTX_MENU_TITLE_HELP_DONATE', 'Спонсорская помощь');
define('CMTX_MENU_TITLE_HELP_LICENSE', 'Лицензия');
/* Log Out */ 
define('CMTX_MENU_TITLE_LOG_OUT', 'Выход');


?>