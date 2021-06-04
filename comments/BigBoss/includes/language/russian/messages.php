<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }
define('CMTX_MSG_SAVED', 'Настройки сохранены.');
define('CMTX_MSG_COMMENT_UPDATED', 'Комментарий обновлен.');
define('CMTX_MSG_COMMENT_DELETED', 'Комментарий удален.');
define('CMTX_MSG_COMMENT_BULK_DELETED', 'удаленных комментариев - 1.');
define('CMTX_MSG_COMMENTS_BULK_DELETED', 'удаленных комментариев - %d.');
define('CMTX_MSG_COMMENT_APPROVED', 'Комментарий одобрен.');
define('CMTX_MSG_COMMENT_BULK_APPROVED', 'одобренных комментариев - 1.');
define('CMTX_MSG_COMMENTS_BULK_APPROVED', 'одобренных комментариев - %d.');
define('CMTX_MSG_COMMENT_ALREADY_APPROVED', 'Комментарий уже одобрен.');
define('CMTX_MSG_COMMENT_BULK_ALREADY_APPROVED', 'уже одобренных комментариев - 1.');
define('CMTX_MSG_COMMENTS_BULK_ALREADY_APPROVED', 'уже одобренных комментариев - %d.');
define('CMTX_MSG_COMMENT_SENT', 'Комментарий отослан.');
define('CMTX_MSG_COMMENT_BULK_SENT', 'отосланных комментариев - 1.');
define('CMTX_MSG_COMMENTS_BULK_SENT', 'отосланных комментариев - %d.');
define('CMTX_MSG_COMMENT_ALREADY_SENT', 'Комментарий уже отослан.');
define('CMTX_MSG_COMMENT_BULK_ALREADY_SENT', 'уже отосланных комментариев - 1.');
define('CMTX_MSG_COMMENTS_BULK_ALREADY_SENT', 'уже отосланных комментариев - %d.');
define('CMTX_MSG_SPAM_REMOVED',  'Спам удален.');
define('CMTX_MSG_PAGE_UPDATED', 'Страница обновлена.');
define('CMTX_MSG_PAGE_DELETED', 'Страница удалена.');
define('CMTX_MSG_PAGE_BULK_DELETED', 'удаленные страницы - 1.');
define('CMTX_MSG_PAGES_BULK_DELETED', 'удаленные страницы - %d.');
define('CMTX_MSG_IDENTIFIER_EXISTS', 'ID страницы уже существует.');
define('CMTX_MSG_ADMIN_ADDED', 'Администратор добавлен.');
define('CMTX_MSG_ADMIN_UPDATED', 'Администратор обновлен.');
define('CMTX_MSG_ADMIN_DELETED', 'Администратор удален.');
define('CMTX_MSG_ADMIN_BULK_DELETED', 'удалено администраторов - 1.');
define('CMTX_MSG_ADMINS_BULK_DELETED', 'удалено администраторов - %d.');
define('CMTX_MSG_ADMIN_EXISTS', 'Имя пользователя уже существует.');
define('CMTX_MSG_ADMIN_SUP_DEL', 'Супер-администраторы не могут быть удалены.');
define('CMTX_MSG_ADMIN_SUP_DIS', 'Супер-администраторы не могут быть отключены.');
define('CMTX_MSG_ADMINS_BULK_SUPER_DELETE', ' Супер-администраторы (&d чел.) не могут быть удалены.');
define('CMTX_MSG_ADMIN_SUPER_DISABLE', 'Супер администратор не может быть удален.');
define('CMTX_MSG_ADMIN_ONLY', 'Извините, только администраторы могут получить доступ к этой странице.');
define('CMTX_MSG_ADMIN_SUPER_ONLY', 'Извините, только супер администраторы могут получить доступ к этой странице.');
define('CMTX_MSG_BAN_ADDED',  'Бан добавлен.');
define('CMTX_MSG_BAN_UPDATED',  'Бан обновлен.');
define('CMTX_MSG_BAN_DELETED', 'Бан удален.');
define('CMTX_MSG_BAN_BULK_DELETED', 'Удаленных банов - 1.');
define('CMTX_MSG_BANS_BULK_DELETED', 'Удаленных банов - %d.');
define('CMTX_MSG_SUB_ADDED', 'Подписчик добавлен.');
define('CMTX_MSG_SUB_UPDATED', 'Подписчик обновлен.');
define('CMTX_MSG_SUB_DELETED', 'Подписчик удален.');
define('CMTX_MSG_SUB_BULK_DELETED', 'удаленных подписчиков - 1.');
define('CMTX_MSG_SUBS_BULK_DELETED', 'удаленных подписчиков - %d.');
define('CMTX_MSG_QUESTION_ADDED', 'Вопрос добавлен.');
define('CMTX_MSG_QUESTION_UPDATED', 'Вопрос обновлен.');
define('CMTX_MSG_QUESTION_DELETED', 'Вопрос удален.');
define('CMTX_MSG_QUESTION_BULK_DELETED', 'удаленных вопросов - 1.');
define('CMTX_MSG_QUESTIONS_BULK_DELETED', 'удаленных вопросов - %d.');
define('CMTX_MSG_IP_ADDRESS_UPDATED', 'IP-Адрес Обновлен.');
define('CMTX_MSG_AKISMET_UNABLE', '<p>Функция fsockopen() повидимому отключена на Вашем сервере.</p><p>Она необходима для нормальной работы приложения. Обратитесь к администратору Вашего сервера с просьбой включить её.</p>');
define('CMTX_MSG_EMAIL_SENT', 'Письмо отправлено.');
define('CMTX_MSG_LOG_RESET', 'Журнал ошибок очищен.');
define('CMTX_MSG_LIST_UPDATED', 'Список обновлен.');
define('CMTX_MSG_RECAPTCHA_UNABLE', '<p>Функция fsockopen() повидимому отключена на Вашем сервере.</p><p>Она необходима для нормальной работы приложения. Обратитесь к администратору Вашего сервера с просьбой включить её.</p>');
define('CMTX_MSG_SECURIMAGE_UNABLE', '<p>Расширение \'<b>GD</b>\' и/или \'<b>FreeType</b>\' повидимому отключены на Вашем сервере.</p><p>Они необходимы для нормальной работы приложения. Обратитесь к администратору Вашего сервера с просьбой включить её.</p>');
define('CMTX_MSG_BACKUP_CREATED', 'Backup копия создана.');
define('CMTX_MSG_BACKUP_DELETED', 'Backup копия удалена.');
define('CMTX_MSG_BACKUP_BULK_DELETED', 'Удаленных backup копий - 1.');
define('CMTX_MSG_BACKUPS_BULK_DELETED', 'Удаленных backup копий - %d.');
define('CMTX_MSG_BACKUP_NOT_FOUND', 'Backup копия не найдена.');
define('CMTX_MSG_BACKUP_BULK_NOT_FOUND', 'Не найдено backup копий - 1.');
define('CMTX_MSG_BACKUPS_BULK_NOT_FOUND', 'Не найдено backup копий - %d.');
define('CMTX_MSG_BACKUP_UNABLE', '<p>Функция fsockopen() повидимому отключена на Вашем сервере.</p><p>Она необходима для нормальной работы приложения. Обратитесь к администратору Вашего сервера с просьбой включить её.</p>');
define('CMTX_MSG_OPTIMIZED', 'Таблицы оптимизированы.');
define('CMTX_MSG_NOTICE_MANAGE_COMMENTS', 'Для повышения производительности отображаются только последние 50 комментариев . Для изменений зайдите в: <b>Настройки - > Система</b>.');
define('CMTX_MSG_NOTICE_LAYOUT_FORM_QUESTIONS', 'Ответы не чувствительны к регистру букв. Разделяйте несколько ответов символом \'|\'.');
define('CMTX_MSG_NOTICE_SETTINGS_ADMIN_DETECTION', 'Сообщения админа будут <a href="http://www.carlik.com/site/commentset.php" target="_blank">отличаться</a>.');
define('CMTX_MSG_NOTICE_SETTINGS_EMAIL_SENDER', 'В поле "<b>Из Электронной Почты:</b>" должен быть зарегестрированный E-mail адрес.');
define('CMTX_MSG_RECORD_MISSING', 'Не найдено.');
define('CMTX_MSG_DEMO', 'Эта функция была отключена в демо режиме.');

?>